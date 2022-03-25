<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;

use App\Models\Product;

use App\Models\Gallery;

use App\Models\Home;

use Session;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone($id)
    {
        $Product = Product::find($id);
        $page_name = "";
        $page_title = "";
        return view('admin.dropzone', compact('page_name','page_title','Product'));
    }

    public function dropzones($id)
    {$slung = Session::get('property');
        $Home = Home::where('slung',$slung)->get();
        $Product = Product::find($id);
        $page_name = "";
        $page_title = "";

        return view('admin.dropzones', compact('page_name','page_title','Product','Home'));
    }

    public function dropzonese($id)
    {
        $Home = Home::where('id',$id)->get();
        $Product = Product::find($id);
        $page_name = "";
        $page_title = "";

        return view('admin.dropzones', compact('page_name','page_title','Product','Home'));
    }



    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $OriginalName = $image->getClientOriginalName();
        // $imageName = $OriginalName.'.'.$image->extension();
        $imageName = $OriginalName;

        $image->move(public_path('uploads/products'),$imageName);
        // add to dDatabase
        $Photos = new Photo;
        $Photos->name  = $imageName;
        $Photos->product_id = $request->product_id;
        $Photos->path = public_path('uploads/products');
        $Photos->save();
        Session::forget('property');
        session()->forget('property');
        return response()->json(['success'=>$imageName]);
    }

    public function dropzoneStores(Request $request)
    {
        $image = $request->file('file');

        $OriginalName = $image->getClientOriginalName();
        // $imageName = $OriginalName.'.'.$image->extension();
        $imageName = $OriginalName;

        $image->move(public_path('uploads/homes'),$imageName);
        // add to dDatabase
        $Photos = new Gallery;
        $Photos->name  = $imageName;
        $Photos->home_id = $request->product_id;
        $Photos->path = public_path('uploads/homes');
        $Photos->save();
        // Destroy Sessions
        Session::forget('property');
        session()->forget('property');
        return response()->json(['success'=>$imageName]);
    }







}
