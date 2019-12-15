<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;



class AlbumController extends Controller
{
    public function add_album(){
        return view('admin.album.add_album');
    }
    protected function albumValidate($request){
        $this->validate($request,[
            'album_name' => 'required',
            'photographers_name' => 'required',
            'main_image' => 'required|image',
            'all_images' => 'required'
        ]);
    }

    protected function mainImageUpload($request){
        $mainImage = $request->file('main_image');
        $ext = '.'.$request->main_image->getClientOriginalExtension();
        $imageName = str_replace($ext, date('d-m-Y-h').$ext, $request->main_image->getClientOriginalName());
        $directory = 'public/admin/product-images/main/';
        $imageUrl = $directory.$imageName;
        $mainImage->move($directory, $imageName);
        return $imageUrl;
    }

    protected function albumInfoSave($request, $imageUrl){
        foreach($request->file('all_images') as $image){
            $imageName2 = $image->getClientOriginalName();
            $directory = 'public/admin/product-images/gallery/';
            $imageUrl2 = $directory.$imageName2;
            $image->move($directory, $imageName2);
            $data[] = $imageUrl2;
        }

        $album = new Album();
        $album->album_name = $request->album_name;
        $album->photographers_name = $request->photographers_name;
        $album->main_image = $imageUrl;
        $album->all_images = json_encode($data);
        $album->save();
    }


    public function new_album(Request $request){
        $this->albumValidate($request);
        $imageUrl = $this->mainImageUpload($request);
        $this->albumInfoSave($request, $imageUrl);

        return back()->with('message','Album Added Successfully!');
    }

}
