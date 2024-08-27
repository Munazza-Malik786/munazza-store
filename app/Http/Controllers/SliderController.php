<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;

class   SliderController extends Controller
{
    function add(Request $request)
    {
        $request->validate([
            'span' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
//        dd('hlloww');
        if ($request->has('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = 'uploads/slider/';
            $file->move($path, $filename);
            $create = Slider::create([
                'span' => $request->span,
                'image' => $path . $filename,
                'paragraph' => $request->paragraph,
                'heading' => $request->heading,
                'button' => $request->button,
            ]);
            if ($create)
                return redirect(url('/slider'));
        }
//        dd('afkj');
//        else{
            $create = Slider::create([
                'span' => $request->span,
                'image' => $request->image,
                'paragraph' => $request->paragraph,
                'heading' => $request->heading,
                'button' => $request->button,
            ]);
//            dd('ghd');
            if ($create)
                return redirect(url('/slider'));
//        }

    }


    function slider()
    {
        $slidData = Slider::all();
        return view('admin.slider.index', compact('slidData'));
    }

    function create()
    {
        return view('admin.slider.create');
    }

    function delete($id)
    {
//        dd('afkj');
        $delete = Slider::where('id', $id)->first();
        if (File::exists($delete->image)) {
            File::delete($delete->image);
        }
        if ($delete) {
            $delete->delete();
            return redirect(url('/slider'));
        }
    }

    function edit($id)
    {
        $edit = Slider::find($id);
//        dd($edit->heading);
        return view('admin.slider.edit', compact('edit'));
    }

    public function slid_update(Request $request)
    {
        $request->validate([
            'span' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);
        $id = isset($request['id']) ? $request['id'] : null;
        $slidUpdate = Slider::findOrFail($id);
        if ($request->has('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = 'uploads/slider/';
            $file->move($path, $filename);
            if (File::exists($slidUpdate->image)) {
                File::delete($slidUpdate->image);
            }
            if ($id) {
                $update = Slider::where('id', $id)->first();
                $update->update([
                    'span' => $request->span,
                    'image' => $path . $filename,
                    'paragraph' => $request->paragraph,
                    'heading' => $request->heading,
                    'button' => $request->button,
                ]);
            }
        }
        return redirect(url('slider'));
    }

}
