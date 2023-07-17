<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function service_details(){
        return view('contents.services.services-details');
    }

    public function blog(){
        return view('contents.blog.blog');
    }

    public function blog_details(){
        return view('contents.blog.blog-details');
    }

    public function portfolio_details(){
        return view('contents.portfolio.portfolio-details');
    }
}
