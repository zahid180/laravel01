<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
      return view ('fontEnd.home.homeContain');
    }
    public function category(){
      return view('fontEnd.category.categoryContain');
    }
    public function contact(){
      return view('fontEnd.contact.contact');
    }
    public function productDetails(){
      return view('fontEnd.product.productContain');
    }
}
