<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Goutte;
use Symfony\Component\DomCrawler\Crawler;

class ScrapperController extends Controller
{

    public $result = [];

    public function scrap($id){
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.bukalapak.com/products/?search%5Bassurance%5D=0&search%5Bbrand%5D=0&search%5Bcity%5D=&search%5Bfree_shipping_coverage%5D=&search%5Binstallment%5D=0&search%5Bkeywords%5D='.$id.'&search%5Bnew%5D=1&search%5Bpremium_seller%5D=0&search%5Bprice_max%5D=&search%5Bprice_min%5D=&search%5Bprovince%5D=&search%5Brating_gte%5D=0&search%5Brating_lte%5D=5&search%5Bsort_by%5D=price%3Aasc&search%5Btodays_deal%5D=0&search%5Btop_seller%5D=0&search%5Bused%5D=1&search%5Bwholesale%5D=0&&');
        //https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=sepatu
        //https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=dompet
        //dd($crawler);
        $inlineStyle = 'article'; //.product-description
       $data = $crawler->filter($inlineStyle)->each(function(Crawler $contactNode, $i) {
           $image = $contactNode->filter('.product-picture')->filter('img')->attr('data-src');
           $productname = $contactNode->filter('.product__name')->first()->text();
           $username = $contactNode->filter('.user__name')->filter('a')->first()->text();
           $city = $contactNode->filter('.user-city__txt')->first()->text();
           $price = $contactNode->filter('.product-price')->filter('.amount')->first()->text();
           $product = $this->extractProduct($i, $productname, $username, $city, $price, $image);

            $this->result = $product;
            $response = json_encode($product);
           return printf(json_encode($product));
        });
    }

    public function post(Client $client, Request $req, $id){

        $crawler = $client->request('GET', 'https://www.bukalapak.com/products/?search%5Bassurance%5D=0&search%5Bbrand%5D=0&search%5Bcity%5D=&search%5Bfree_shipping_coverage%5D=&search%5Binstallment%5D=0&search%5Bkeywords%5D='.$id.'&search%5Bnew%5D=1&search%5Bpremium_seller%5D=0&search%5Bprice_max%5D=&search%5Bprice_min%5D=&search%5Bprovince%5D=&search%5Brating_gte%5D=0&search%5Brating_lte%5D=5&search%5Bsort_by%5D=price%3Aasc&search%5Btodays_deal%5D=0&search%5Btop_seller%5D=0&search%5Bused%5D=1&search%5Bwholesale%5D=0&&');
        //https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=sepatu
        //https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=dompet
        //dd($crawler);
        $inlineStyle = 'article'; //.product-description
       $data = $crawler->filter($inlineStyle)->each(function(Crawler $contactNode, $i) {
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
           //dd($productname);
           $username = $contactNode->filter('.user__name')->filter('a')->first()->text();
           $city = $contactNode->filter('.user-city__txt')->first()->text();
           $price = $contactNode->filter('.product-price')->filter('.amount')->first()->text();

           //print gettype($username);
           //$parts = explode('Product Name',$productname);
           $product = $this->extractProduct($i, $productname, $username, $city, $price, $image);
          //  print json_encode($product);
          //  dd();
            $this->result = $product;
            return $product;
           //var_dump($product);
           //print $price->text().'<br>';
           //dd($productname->html());
        });
        //print_r($data[0]);
        //dd($this->result);
       //return view('dashboard')->with('data',$this->result);
       return view('dashboard')->with('data',$data);


    }
    public function index(Client $client, Request $req){

        $crawler = $client->request('GET', 'https://www.bukalapak.com/products/?search%5Bassurance%5D=0&search%5Bbrand%5D=0&search%5Bcity%5D=&search%5Bfree_shipping_coverage%5D=&search%5Binstallment%5D=0&search%5Bkeywords%5D=buku&search%5Bnew%5D=1&search%5Bpremium_seller%5D=0&search%5Bprice_max%5D=&search%5Bprice_min%5D=&search%5Bprovince%5D=&search%5Brating_gte%5D=0&search%5Brating_lte%5D=5&search%5Bsort_by%5D=price%3Aasc&search%5Btodays_deal%5D=0&search%5Btop_seller%5D=0&search%5Bused%5D=1&search%5Bwholesale%5D=0&&');
        //https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=sepatu
        //https://www.bukalapak.com/products?utf8=%E2%9C%93&source=navbar&from=omnisearch&search_source=omnisearch_organic&search%5Bhashtag%5D=&search%5Bkeywords%5D=dompet
        //dd($crawler);
        $inlineStyle = 'article'; //.product-description
       $data = $crawler->filter($inlineStyle)->each(function(Crawler $contactNode, $i) {
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
           //dd($productname);
           $username = $contactNode->filter('.user__name')->filter('a')->first()->text();
           $city = $contactNode->filter('.user-city__txt')->first()->text();
           $price = $contactNode->filter('.product-price')->filter('.amount')->first()->text();

           //print gettype($username);
           //$parts = explode('Product Name',$productname);
           $product = $this->extractProduct($i, $productname, $username, $city, $price, $image);
          //  print json_encode($product);
          //  dd();
            $this->result = $product;
            return $product;
           //var_dump($product);
           //print $price->text().'<br>';
           //dd($productname->html());
        });
        //print_r($data[0]);
        //dd($this->result);
       //return view('dashboard')->with('data',$this->result);
       return view('dashboard')->with('data',$data);


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

    public function about(){
        return view('about');
    }


}
