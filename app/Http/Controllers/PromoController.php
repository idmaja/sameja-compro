<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class PromoController extends Controller
{
    public function index()
    {
        $user = User::all();
        $promo = Promo::all();
        return view('promo.land', compact('promo', 'user'));
    }

    public function create()
    {
        $user = User::all();
        $promo = Promo::all();
        return view('promo.create', compact('promo', 'user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $image = $request->image;
        $fileName = date('Y-m-d') . $image->getClientOriginalName();

        $promoS = new Promo;
        $promoS->name = $request->name;
        $promoS->description = $request->description;
        $promoS->image = $fileName;

        $image->move(public_path() . '/img-promo', $fileName);
        $promoS->save();

        return redirect(route('promo.land'));

        // dd($request->all());
    }

    public function edit($id)
    {
        $user = User::all();
        $promo = Promo::all();
        $data = Promo::findorfail($id);
        return view('promo.edit', compact('data', 'promo', 'user'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'nullable',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $promoUpdate = Promo::findorfail($id);
        $awal = $promoUpdate->image;

        $data = [
            'name' => $request['name'],
            'description' => $request['description'],
            'image' => $awal
        ];

        $request->image->move(public_path() . '/img-promo', $awal);
        $promoUpdate->update($data);

        return redirect(route('promo.land'));
    }

    public function delete($id)
    {
        $delete = Promo::findorfail($id);

        $file = public_path('/img-promo/') . $delete->image;
        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();

        return back();
    }
}
