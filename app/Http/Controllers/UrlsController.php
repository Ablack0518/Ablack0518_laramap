<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class UrlsController extends Controller
{
    function store(Request $request)
    {
        /**************************
         ****** validate url ******
         **************************/
        $this->validate($request,['url' => 'required|url']);//using the Controller method validate()

        $uRL = $this->getShortUrl($request->url);

        return view('pages.url')->with('urlShortened', $uRL->urlShortened);
    }


    function show($urlShortened){

        $url = Url::where('urlShortened', $urlShortened)->first();   
          if (!$url) {                                                 
            return redirect('/url-short');                             
         }

    /*********************************************************************
    |           Other way to get url shortened                           |
    | $url = Url::where('urlShortened', $urlShortened)->firstOrFail();   |
    | In this case go to move exception in Exception/Handler.php file    |                                                             |
    *********************************************************************/
        return Redirect::to($url->url);
    }

    private function getShortUrl($url)
    {
        /***************************************
        |         using the Facades            | 
        | to find or create the url shortened  |
        ***************************************/
        return Url::firstOrCreate(
            ['url'=>$url],
            ['urlShortened'=> Url::getUniqueShortUrl()]
        );
    }

    
    function showUrlshortened()
    {
        echo date('D M Y');
        return view('pages.url');
    }

}











/***************************************************************************************\
|                                                                                       |
|   //check if url is already shortened                                                 | 
|    $url = $request->get('url'); //ou request('url') ou $request->url                  |
|                                                                                       |
|    $uri = Url::where('url', $url)->first(); //$uri = Url::whereUrl($url)->first();    |
|    if ($uri) {                                                                        |
|        return view('pages.url')->with('urlShortened', $uri->urlShortened);            |
|   }                                                                                   |
|                                                                                       |
|     //if shortened url does'nt exists ? we are create it                              |
|    $_url = Url::create([                                                              |
|        'url' => $url,                                                                 |
|        'urlShortened' => Url::getUniqueShortUrl()                                     |
|    ]);                                                                                |
|    if ($_url) {                                                                       |
|        return view('pages.url')->with('urlShortened', $_url->urlShortened);           |
|    }                                                                                  |
\***************************************************************************************/

/************************************************************
 *   using the Facades to get method validate               *
 *  *********************************************************
 *   $uriValide = Validator::make(                          *
 *   compact('url'),                                        *
 *   ['url' => 'required|url'],                             *
 *   ['required' => 'Ce champ est obligatoire',             *
 *   'url' => 'Ce url a un format invalide'] set msg in fr  *
 * )->validate();                                           *
 ***********************************************************/

/***************************************************************************************************
 ******************************** autres façons de passer à la vue *********************************  
 * return view('pages.url-shortner')->with('data', $url->uriShortened);                         ****
 * return view('pages.url-shortner')->withData($uri->urlShortened);                             ****
 * $data = $uri->urlShortened;                                                                  ****
 * return view('pages.uri-shortner',compact('data'));                                           ****
 * return view('pages.url-shortner', ['urlShortened' => $uri->urlShortened,'url'=>$uri->url]);  ****
 ***************************************************************************************************/


/*********************************************
 ***** check if url is already shortened *****
 *********************************************/
/*
    $urlShortened = Url::where('url', $url)->first(); //$uri = Url::whereUrl($url)->first();
    if ($urlShortened) {
        return $urlShortened;
    }
    return
        Url::create([
            'url' => $url,
            'urlShortened' => Url::getUniqueShortUrl()
        ]);
*/
