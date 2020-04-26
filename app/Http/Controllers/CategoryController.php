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
      $this->validate($request,[
        'categoryName'=>'required',
        'categoryDescription'=>'required',
      ]);
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
      $category=Category::all();
      return view('admin.category.manageCategory',['categories'=>$category]);
    }

    public function categoryEdit($id){
      $categoryById=Category::where('id',$id)->first();
      return view('admin.category.editCategory',['categories'=>$categoryById]);

    }

    public function categoryUpdate(Request $request){
      // dd($request->all()); dekhar jonno..
      $category=Category::find($request->categoryId);
      $category->categoryName=$request->categoryName;
      $category->categoryDescription=$request->categoryDescription;
      $category->publicationStatus=$request->publicationStatus;
      $category->save();
      return redirect('/category/manage')->with('massage','Category Update successfully');
    }

    public function categoryDelet($id){
      $category=Category::find($id);
      $category->delete();
        return redirect('/category/manage')->with('massage','Category Delete successfully');
    }

}
