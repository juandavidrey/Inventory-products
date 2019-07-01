<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
  public function index()
  {
    $products = Product::all();
    // return view('admin.muninfo.index', compact('municipios'));
    return view('display', compact('products'));
  }

}
