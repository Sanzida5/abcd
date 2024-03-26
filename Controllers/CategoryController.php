<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function manageCategory(Request $req){
        if($req->isMethod("POST")){
            $data = $req->validate(['cat_title' => 'required']);
         
            Category::create($data);
            return redirect()->route("admin.category")->with("msg","Category inserted successfully");

        }
        $data['categories'] = Category::all();
        return view("admin.manageCategory",$data);
    }
}
