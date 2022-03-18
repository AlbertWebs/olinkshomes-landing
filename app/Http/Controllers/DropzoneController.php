<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Photo;

use App\Models\Product;

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

        return response()->json(['success'=>$imageName]);
    }

}
