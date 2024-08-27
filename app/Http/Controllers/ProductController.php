<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;

class   ProductController extends Controller
{
    function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
//        dd('hlloww');
        if ($request->has('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = 'uploads/product/';
            $file->move($path, $filename);
            $create = Product::create([
                'name' => $request->name,
                'image' => $path . $filename,
                'brand' => $request->brand,
                'catagory' => $request->heading,
                'subcatagory' => $request->subcatagory,
                'status' => $request->status,
            ]);
        }
//        dd($request->span);
        if ($create) {
            return redirect(url('/products'));
        }
    }


    function product()
    {
        $proData = Product::all();
        return view('admin.product.index', compact('proData'));
    }

    function create()
    {
        return view('admin.product.create');
    }
//
//    function delete($id)
//    {
//        $delete = Product::where('id', $id)->first();
//        if (File::exists($delete->image)) {
//            File::delete($delete->image);
//        }
//        if ($delete) {
//            $delete->delete();
//            return redirect(url('/products'));
//        }
//    }
//
//    function edit($id)
//    {
//        $edit = Product::find($id);
////        dd($edit->heading);
//        return view('admin.product.edit', compact('edit'));
//    }
//
//    public function slid_update(Request $request)
//    {
//        $request->validate([
//            'span' => 'required|max:255|string',
//            'image' => 'nullable|mimes:png,jpg,jpeg',
//        ]);
//        $id = isset($request['id']) ? $request['id'] : null;
//        $catUpdate = Product::findOrFail($id);
//        if ($request->has('image')) {
//            $file = $request->file('image');
//            $ext = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $ext;
//            $path = 'uploads/product/';
//            $file->move($path, $filename);
//            if (File::exists($catUpdate->image)) {
//                File::delete($catUpdate->image);
//            }
//            if ($id) {
//                $update = Product::where('id', $id)->first();
//                $update->update([
//                    'span' => $request->span,
//                    'image' => $path . $filename,
//                    'paragraph' => $request->paragraph,
//                    'heading' => $request->heading,
//                    'button' => $request->button,
//                ]);
//            }
//        }
//        return redirect(url('products'));
//    }

}
