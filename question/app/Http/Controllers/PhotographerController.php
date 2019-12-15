<?php

namespace App\Http\Controllers;
use App\Photographer;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{
    public function add_photographer(){
        return view('admin.photographer.photographer');
    }
    public function new_photographer(Request $request){
        $this->validate($request,[
            'photographers_name' => 'required',
            'main_image' => 'required|image'
        ]);


        $main_image = $request->file('main_image');
        $imageName = $main_image->getClientOriginalName();
        $directory = 'public/admin/Photographer-images/';
        $imageUrl = $directory.$imageName;
        $main_image->move($directory, $imageName);




        $photographer = new Photographer();
        $photographer->photographers_name = $request->photographers_name;
        $photographer->main_image = $imageUrl;
        $photographer->save();

        return back()->with('message','Photographer Added Successfully!');
    }
}
