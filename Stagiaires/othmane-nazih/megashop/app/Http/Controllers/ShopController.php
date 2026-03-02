<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Page d'accueil
     */
    public function index()
    {
        require app_path('Data/data.php');

        $GLOBALS['products'] = $products;
        $GLOBALS['categories'] = $categories;

        $featuredProducts = getFeaturedProducts();

        return view('index', compact('categories', 'featuredProducts'));
    }

    /**
     * Page Contact
     */
    public function contact()
    {
        require app_path('Data/data.php');

        return view('contact', compact('config', 'faq'));
    }

    /**
     * Page CGV
     */
    public function cgv()
    {
        require app_path('Data/data.php');

        return view('cgv', compact('cgv'));
    }
}
