<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $product = Product::all();
        return view ('backend.product.index',compact('product'));
    }

    public function createform(){
        return view ('backend.product.createform');
    }

    public function edit($product_id){
        $pro = Product::find($product_id);
        return view ('backend.product.edit', compact('pro'));
    }

    public function insert(Request $request){
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
        ],
        [
            'name.required' => 'กรุณาเลือกข้อมูลประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู้ในฐานข้อมูลแล้ว',
            'name.max'=> 'กรอกข้อมูลได้ 255 ตัวอักษร',
        ]);

        //การบันทึกข้อมูล
        $product = new Product();
        $product ->name = $request->name;
        $product ->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้บันทึกแล้ว');
        return redirect()->route('u.product');
    }
}