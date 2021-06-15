<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pharmacy;
use App\Location;

class PharmaciesController extends Controller
{
    public function add(){

        $location=Location::all();
        return view ('pharmacies.add',compact('location'));
    }

  public function store(Request $request){

 $pharmacy = new Pharmacy;
 $pharmacy->name = $request->name;
 $pharmacy->save();
        return back();
    }

 public function all(){
    $pharmacy=Pharmacy::with('location')->get();
 $pharmacy= Pharmacy::all();
        return view ('pharmacies.all', compact('pharmacy'));
    }

   public function edit($id){

      $location=Location::all();
       $pharmacy= Pharmacy::where('id','=',$id)->first();

        return view ('pharmacies.edit',compact('pharmacy','location'));
    }

    public function update($id,Request $request){

 $pharmacy =Pharmacy::find($id);
 $pharmacy->name = $request->name;
 $pharmacy->save();
        return redirect('/pharmacies/all');
    }

    public function delete($id){

     $pharmacy= Pharmacy::find($id);
     $pharmacy->delete();
       return redirect('/pharmacies/all');
    }
}
