<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;
use App\Models\Category;

class ProductController extends Controller
{
    public function product(){
        $product = Product::orderBy('product_id','desc')->Paginate(10);
        return view ('backend.product.index',compact('product'));
    }

    public function createform(){
        $category = Category ::all();
        return view ('backend.product.createform',compact('category'));
    }

    public function edit($product_id){
        $pro = Product ::find($product_id);
        $cat = Category::all();
        return view ('backend.product.edit',compact('cat','pro'));
    }

    public function insert(Request $request){

        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
        'name' => 'required|max:255',
        'price' => 'required|max:255',
        'description' => 'required',
        'image' => 'mimes:jpg,jpeg,png',
        ],
        [
        'name.required' => 'กรุณากรอกข้อมูลสินค้า',
        'name.max'=> 'กรอกข้อมูลได้ 255 ตัวอักษร',
        'price.required' => 'กรุณากรอกราคาสินค้า',
        'price.max'=> 'กรอกข้อมูลได้ 255 ตัวอักษร',
        'description.required' => 'กรุณากรอกรายละเอียดสินค้า',
        'image.mimes' => 'อัพโหลดภาพที่มีนานสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);
        
        //การบันทึกข้อมูล
        $product = new Product();
        $product ->name = $request->name;
        $product ->price = $request->price;
        $product ->description = $request->description;
        $product ->category_id = $request->category_id;
        if($request->hasFile('image')){
            $filesname = Str::random(10). '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filesname);
            Image::make(public_path().'/backend/product/'. $filesname)->resize(500,450)->save(public_path().'/backend/product/resize/'.$filesname);
            $product->image = $filesname;
        }else{
            $product->image = 'no_image.jpg';
        }
        $product ->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้บันทึกแล้ว');
        return redirect()->route('u.product');
    }

    public function update(Request $request, $product_id){


        $product = Product::find($product_id);
        $product ->name = $request->name;
        $product ->price = $request->price;
        $product ->description = $request->description;
        $product ->category_id = $request->category_id;
        if($request->hasFile('image')){
            if($product->image != 'no_image.jpg'){
                File::delete(public_path() . '/backend/product/' . $product->image);
                File::delete(public_path() . '/backend/product/resize/' . $product->image);
            }
            $filesname = Str::random(10). '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filesname);
            Image::make(public_path().'/backend/product/'. $filesname)->resize(250,250)->save(public_path().'/backend/product/resize/'.$filesname);
            $product->image = $filesname;
        }
        $product ->update();
        alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลนี้แก้ไขแล้ว');
        return redirect()->route('u.product');
    }

    public function delete($product_id){
        $product = Product::find($product_id);
        if($product->image != 'no_image.jpg'){
            File::delete(public_path() .
            '/backend/product/'.$product->image);
            File::delete(public_path() .
            '/backend/product/resize/'.$product->image);               
        }
        $product->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบแล้ว');
        return redirect()->route('u.product');
    }       
}     