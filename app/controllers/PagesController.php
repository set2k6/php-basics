<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {
    public function home(){
        $users = App::get('database')->selectAll('users');

        return view('index');
    }


    public function about(){
        $company = 'Green Man Productions';

        return view('about',['company'=>$company]);
    }

    public function contact(){
        return view('contact');
    }
}
