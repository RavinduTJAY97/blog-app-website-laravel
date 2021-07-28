<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'This is the Home Page';
        return view('pages.index')->with('title',$title);

    } public function about(){
        $title = 'This is what you need to know about us';
        return view('pages.about')->with('title',$title);

    } public function services(){

        $data = array(
            'title'=>'Services we provide',
            'services'=>['Programming','WEB Designing','SEO']
        );
        return view('pages.services')->with($data);
    }

}
