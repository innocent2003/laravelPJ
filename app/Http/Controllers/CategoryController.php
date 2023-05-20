<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function addCategory(){
        $category = [
            ['name'=>'Trouser'],
            ['name'=>'Pant'],
            ['name'=>'Shirt']
        ];
        Category::insert($category);
        return "category added successfully";
    }
    public function index(){
        $data = Category::all();
        return view('addProduct',['categories'=>$data]);
    }
}
