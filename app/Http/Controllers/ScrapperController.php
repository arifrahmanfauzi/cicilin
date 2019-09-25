<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Goutte;
use Symfony\Component\DomCrawler\Crawler;

class ScrapperController extends Controller
{

    public $result = [];


    public function index(Client $client){

        $crawler = $client->request('GET', 'https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=sepatu');
        //dd($crawler);
        $inlineStyle = 'article'; //.product-description
        $crawler->filter($inlineStyle)->each(function(Crawler $contactNode, $i) {
           // $node = $contactNode->filter('a')->first();
           // print $node->text().'<br>';
        //    $divs = $contactNode->parents()->filter('div');
        //     $section = $divs->eq(0);

        //      dd($divs->html());
            // $all = $contactNode->filter('a');
            // print $all->text();
            //dd($all->html());
            //print $i;
             $image = $contactNode->filter('.product-picture')->filter('img')->attr('data-src');

           $productname = $contactNode->filter('.product__name')->first()->text();
           $username = $contactNode->filter('.user__name')->filter('a')->first()->text();
           $city = $contactNode->filter('.user-city__txt')->first()->text();
           $price = $contactNode->filter('.product-price')->filter('.amount')->first()->text();

           //print gettype($username);
           //$parts = explode('Product Name',$productname);
           $product = $this->extractProduct($i, $productname, $username, $city, $price, $image);
            $this->result = $product;
           //var_dump($product);
           //print $price->text().'<br>';
           //dd($productname->html());
        });
        //dd($this->result);
       return view('dashboard')->with('data',$this->result);


    }

    public function extractProduct($i, $productname, $username, $city, $price, $image){

        $list = [];

        $explode = explode('Product Name',$productname);
        $list['name'] = $explode[0];

        $explode = explode('User Name',$username);
        $list['username'] = $explode[0];


        $explode = explode('City',$city);
        $list['city'] = $explode[0];


        $explode = explode('Price',$price);
        $list['price'] = $explode[0];

        $explode = explode('Image',$image);
        $list['image'] = $explode[0];


        return $list;
    }

        // $crawler->filter('.product-description')->each(function ($node,$i){
        //   echo $i;
        //   echo $node->filter('a')->text();
        //   echo "<br>";
        // });

       //echo $crawler->filter('.product-description')->filter('a')->eq(1)->text();
       //$data = [];
       //$variables["list"];

        //$result = $crawler->filter('.product-description')->each(function ($node,$i) use($data){
          //array_push($data, $node->filter('a')->text());
          // echo $i;
          //  echo $node->filter('a')->text().'<br>';
          // $value = $node->filter('a')->text().'<br>';
          // $data[$i][] = $value;

          //dd($pages);
          //dd($data[$i][]);
          //dd($data);
          //$data[$i] = $node->filter('a')->text();
        //});
        //dd($data);

        //dd($data);

        //  print $data[4];
        //print $crawler->filter('.product-description')->filter('a')->text();

}
