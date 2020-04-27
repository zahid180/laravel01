<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Manufacture;

class ManufactureController extends Controller
{
    public function addManufacture(){
      return view('admin.manufacture.addManufacture');
    }

    public function storeManufacture(Request $request){
      $this->validate($request,[
        'manufactureName' =>'required',
        'manufactureDescription' =>'required',
      ]);
      Manufacture::create($request->all());
      return redirect('/manufacture/add')->with('massage','Manufacture Add successfully');
    }

    public function manageManufacture(){
      $manufacture=Manufacture::all();
      return view('admin.manufacture.manageManufacture',['manufactures'=>$manufacture]);
    }

    public function editManufacture($id){
      $manufactureById=Manufacture::where('id',$id)->first();
      // dd($manufactureById);
      return view('admin.manufacture.editManufacture',['manufacture'=>$manufactureById]);
    }

    public function updateManufacture(Request $request){
      $manufactures=Manufacture::find($request->manufactureId);
      $manufactures->manufactureName=$request->manufactureName;
      $manufactures->manufactureDescription=$request->manufactureDescription;
      $manufactures->publicationStatus=$request->publicationStatus;
      $manufactures->save();
      return redirect('/manufacture/add')->with('massage','Manufacture Update Successfully');
    }

    public function deletManufacture($id){
      $deletemanufacture=Manufacture::find($id);
      $deletemanufacture->delete();
      return redirect('/manufacture/manage');

    }
}
