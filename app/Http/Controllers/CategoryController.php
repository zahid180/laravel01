<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function createCategory(){
      return view('admin.category.creatCategory');

    }
    public function storeCategory(Request $request){
      // return $request->all();
      // one way to insert data
      // $category=new Category();
      // $category->categoryName=$request->categoryName;
      // $category->categoryDescription=$request->categoryDescription;
      // $category->publicationStatus=$request->publicationStatus;
      // $category->save();
      // return 'Category info Save successfully';

      // two number way to insert data
      // Category::create($request->all());
      // return 'Category info Save successfully';

      DB::table('categories')->insert([
        'categoryName'=>$request->categoryName,
        'categoryDescription'=>$request->categoryDescription,
        'publicationStatus'=>$request->publicationStatus,
      ]);
      // return redirect()->back();   //redirect path ..
      return redirect('/category/add')->with('massage','category save successfully');  //redirect path ..
    }


    public function manageCategory(){
      $categories=Category::all();
      return view('admin.category.manageCategory'.['category'=>$categories]);
    }
}
