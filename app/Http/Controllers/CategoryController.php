<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Category;

class CategoryController extends Controller
{
    public function createCategory(){
      return view('admin.category.creatCategory');

    }
    public function storeCategory(Request $request){
      return $request->all();
      // $category=new Category();
      // $category->categoryName=$request->categoryName;
      // $category->categoryDescription=$request->categoryDescription;
      // $category->publicationStatus=$request->publicationStatus;
      // $category->save();
      // return 'Category info Save successfully';

      // Category::create($request->all);
      // return 'Category info Save successfully';



    }
}
