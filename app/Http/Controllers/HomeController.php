<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function hdtuto(){

        $client = new Client();
    $crawler = $client('GET', 'https://www.bukalapak.com/products/?search=tas');

    $crawler->filter('.c-product-card__name')->each(function ($node) {
      print $node->text()."\n";
    });
     return view('welcome', ['data'=> $crawler]);
    }
}
