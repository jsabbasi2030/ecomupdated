<?php

namespace App\Http\Controllers;
use App\Models\categorie;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    


 public function index()
 {
    return view("add_category");
 }


 public function save_category(Request $request)
 {


      $validated = $request->validate([
        'category_name' => 'required|max:255',
        'category_status' => 'required',
    ]);





      $obj = new categorie();

      $obj->category_name = $request->category_name;
      $obj->category_status = $request->category_status;
      $obj->save();

    

    return redirect(route('add-category'))->with("msg","Category Added Sucessfulyy");

 }



  public function allCategory()
 {



    $categories = categorie::paginate(10);

    return view("all_category",compact('categories'));
 }





























}
