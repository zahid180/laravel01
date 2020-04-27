<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacture;
use App\product;


class ProductController extends Controller
{
    public function addProduct(){
      $categories=Category::where('publicationStatus',1)->get();
      $manufactures=Manufacture::where('publicationStatus',1)->get();
      return view('admin.product.addproduct',['categories'=>$categories ,'manufactures'=>$manufactures]);
    }
    public function storeProduct(Request $request){
      // return $request->all();
      $this->validate($request,[
        'productName'=>'required',
        'productPrice'=>'required',
        'productImage'=>'required',
      ]);
      $ProductImage=$request->file('productImage');
      $name=$ProductImage->getClientOriginalName();
      $uploadPath='productImage/';
      $ProductImage->move($uploadPath,$name);
      $imageUrl=$uploadPath.$name;
      $this->saveProductInfo($request,$imageUrl);
      return redirect('/product/add')->with('massage','Product Info ?Save successfuffy');

      // echo "$imageName";
      // print_r($imageName);
    }
    protected function saveProductInfo($request,$imageUrl){
      $product=new product();
      $product->productName=$request->productName;
      $product->categoryId=$request->categoryId;
      $product->manufactureId=$request->manufactureId;
      $product->productPrice=$request->productPrice;
      $product->productQuantity=$request->productQuantity;
      $product->productshortDescription=$request->productshortDescription;
      $product->productLongDescription=$request->productLongDescription;
      $product->productImage=$imageUrl;
      $product->publicationStatus=$request->publicationStatus;
      $product->save();
    }
}
