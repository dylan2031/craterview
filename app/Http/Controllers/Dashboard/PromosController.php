<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class PromosController extends Controller
{
    // Main promos page
    public function index()
    {
        return view('user.perks.promos.index', [
            'windowTitle' => 'Promotions',
        ]);
    }

    // Rockbuster page
    public function domino()
    {
        return view('user.perks.promos.domino.page', [
            'windowTitle' => 'Moments by Domino',
        ]);
    }

    // Rockbuster page
    public function rockbuster()
    {
        return view('user.perks.promos.rockbuster.page', [
            'windowTitle' => 'Rockbuster Sign Up',
        ]);
    }

    // Monthly giveaway page
    public function monthlyGiveaway()
    {
        return view('user.perks.promos.giveaway.page', [
            'windowTitle' => 'Monthly Giveaway',
        ]);
    }

    // Cocktails page
    public function cocktails()
    {
        return view('user.perks.promos.food-and-beverage.cocktails', [
            'windowTitle' => 'Infinity Lounge Promo',
        ]);
    }

    // Meal deal page
    public function mealDeal()
    {
        return view('user.perks.promos.food-and-beverage.meal-deal', [
            'windowTitle' => 'Infinity Lounge Promo',
        ]);
    }

    // Survey page
    public function discount()
    {
        return view('user.perks.promos.survey.landing', [
            'windowTitle' => 'Survey',
        ]);
    }
    public function survey()
    {
        return view('user.perks.promos.survey.questions', [
            'windowTitle' => 'Survey',
        ]);
    }
    public function ad()
    {
        return view('user.perks.promos.survey.ad', [
            'windowTitle' => 'Human Origins',
        ]);
    }

    public function voucherSuccess()
    {
        return view('user.perks.promos.survey.voucher-success', [
            'windowTitle' => 'Download your FREE voucher',
        ]);
    }
    
}