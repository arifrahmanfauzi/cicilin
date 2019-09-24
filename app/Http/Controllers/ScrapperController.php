<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Goutte;
class ScrapperController extends Controller
{
    public function index(){
        $crawler = Goutte::request('GET', 'https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=sepatu');
        $crawler->filter('.product-description')->each(function ($node) {
          print $node->filter('a')->text();
        });

        $data [] = null;
        // $crawler->filter('.product-description a')->each(function ($node) {
        //     //dump($node->text());
        //     //print $node->text()."\n" ;
        //     //print $node->text()."\n";
        //     //dd($node->text());
        // });

        // $crawler->filter('.c-product-card-description')->each(function($node){
        //     print $node->text();
        // });

        // dd($crawler->text());
            //print $crawler->text() ;
         //return view('welcome');
    }
}
