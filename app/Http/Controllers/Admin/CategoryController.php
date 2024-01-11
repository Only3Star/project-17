<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::all();
        return view ('backend.category.index',compact('category'));
    }

    public function createform(){
        return view ('backend.category.createform');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
        return view ('backend.category.edit',compact('cat'));
    }

    public function insert(Request $request){
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู้ในฐานข้อมูลแล้ว',
            'name.max'=> 'กรอกข้อมูลได้ 255 ตัวอักษร',
        ]);

        //การบันทึกข้อมูล
        $category = new Category();
        $category ->name = $request->name;
        $category ->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้บันทึกแล้ว');
        return redirect()->route('u.category');
    }
}