<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class AccountUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**************************
    ***************************
    *        Username         *
    ***************************
    ***************************/

    public function showUsername()
    {
        return view('user.account.username', [
            'windowTitle' => 'Control Panel',
        ]);
    }

    public function updateUsername(Request $request)
    {
        $user = auth()->user();

        // normalise input
        $username = strtolower(trim($request->username));

        // validate the exact value that will be saved
        $validated = Validator::make([
            'username' => $username
        ], [
            'username' => [
                'required',
                'string',
                'max:32',
                'regex:/^[a-zA-Z0-9._ -]+$/',
                Rule::unique('users')->ignore($user->id),
            ],
        ], [
            'username.required' => 'Username cannot be blank',
            'username.unique' => 'Username already in use',
            'username.max' => 'Username cannot exceed 32 characters',
            'username.regex' => 'Username may contain letters, numbers, spaces, periods, hyphens and underscores only',
        ])->validate();

        // 3. Save validated value (guaranteed safe)
        $user->username = $validated['username'];
        $user->display_name = trim($request->username);

        $user->save();

        return redirect()
            ->route('cpanel')->with('message', 'Username successfully updated!');
    }

    /**************************
    ***************************
    *          Email          *
    ***************************
    ***************************/

    public function showEmail()
    {
        return view('user.account.email', [
            'windowTitle' => 'Control Panel',
        ]);
    }

    public function updateEmail(Request $request)
    {
        $user = auth()->user();

        // Normalise email before validation
        $request->merge([
            'email' => $request->filled('email')
                ? strtolower(trim($request->email))
                : null,
        ]);

        Validator::make($request->all(), [
            'email' => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ], [
            'email.email' => 'Invalid email address',
            'email.max' => 'Email address exceeds character limit',
            'email.unique' => 'Email address already in use',
        ])->validate();

        $user->email = $request->input('email');
        $user->save();

        return back()->with('message', 'Email updated successfully');
    }

    /**************************
    ***************************
    *        Password         *
    ***************************
    ***************************/

    public function showPassword()
    {
        return view('user.account.password', [
            'windowTitle' => 'Control Panel',
        ]);
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();

        // validate input 
        $validated = Validator::make($request->all(), [
            'current_password' => ['required'],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ], [
            'current_password.required' => 'Current password is required',
            'password.required' => 'Password cannot be blank',
            'password.min' => 'Password must be at least 8 characters',
            'password.confirmed' => 'Password confirmation does not match',
        ])->validate();

        // check current password manually
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->with('message', 'Current password is incorrect');
        }

        // prevent reusing same password
        if (Hash::check($validated['password'], $user->password)) {
            return back()->with('message', 'New password must be different from the current password');
        }


        // sass the user if they have a bad password
        $warning = null;
        $pw = strtolower($validated['password']);

        if ($pw === 'password') {
            $warning = 'Password updated. System advisory: You selected "password" as your password. Confidence in user decision-making is below baseline.';
        }

        // save
        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect()
            ->route('cpanel')
            ->with('message', $warning ?? 'Password successfully updated.');
    }

    /**************************
    ***************************
    *      Region (faux)      *
    ***************************
    ***************************/

    public function showRegion()
    {
        return view('user.account.region', [
            'windowTitle' => 'Control Panel',
        ]);
    }
}