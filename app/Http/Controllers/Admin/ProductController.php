<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view ('backend.product.index');
    }

    public function createform(){
        return view ('backend.product.createform');
    }

    public function edit(){
        return view ('backend.product.edit');
    }
}