<?php

namespace App\Http\Controllers;

//use Faker\Core\File;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Models\Catagory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\File;


class CatagoryController extends Controller
{
    public function add_catagory(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
        if ($request->has('image'))
            $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $path = 'uploads/catagory/';
        $file->move($path, $filename);
        Catagory::create([
            'name' => $request->name,
            'image' => $path . $filename,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);
//        dd($request->image);
//        if ($createCat) {
        return redirect(url('/catagory'));
//        }
    }


    function catagory()
    {
        $catData = Catagory::all();
        return view('admin.catagory.index', compact('catData'));
    }

    function create_catagory()
    {
        return view('admin.catagory.create');
    }

    function delete($id)
    {
        $delete = Catagory::where('id', $id)->first();
        if ($delete) {
            $delete->delete();
            return redirect(url('/catagory'));
        }
    }

    function edit($id)
    {
        $edit = Catagory::find($id);
        return view('admin.catagory.edit', compact('edit'));
    }

    public function cat_update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
        $id = isset($request['id']) ? $request['id'] : null;
        $Update=Catagory::findOrFail($id);
        if ($request->has('image'))
            $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $path = 'uploads/catagory/';
        $file->move($path, $filename);
//        dd($request->image);
        if (File::exists($request->image)) {
            File::delete($request->image);
        }
        dd('sfjhs');
        if ($id) {
//            $update = Catagory::where('id', $id)->first();
            $Update->update([
                'name' => $request->name,
                'image' => $path . $filename,
                'slug' => $request->slug,
                'status' => $request->status,
            ]);
//            dd($update->image);
            return redirect(url('/catagory'));
        }
    }
}
