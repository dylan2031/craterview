<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index() {
        return view('user.perks.news.article1', [
            'windowTitle' => 'Craterview subscription',
        ]);
    }

    public function article1() {
        return view('user.perks.news.article1'
        );
    }

        public function article2() {
        return view('user.perks.news.article2'
        );
    }

        public function article3() {
        return view('user.perks.news.article3'
        );
    }

        public function article4() {
        return view('user.perks.news.article4'
        );
    }

        public function article5() {
        return view('user.perks.news.notice', [
            'windowTitle' => 'Notice Board',
        ]);
    }
}
