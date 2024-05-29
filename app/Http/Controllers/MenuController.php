<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $user = User::all();
        return view('menu.land', compact('menu', 'user'));
    }

    public function create()
    {
        $menu = Menu::all();
        $user = User::all();
        return view('menu.create', compact('menu', 'user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $image = $request->image;
        $fileName = date('Y-m-d') . $image->getClientOriginalName();

        $menuS = new Menu;
        $menuS->name = $request->name;
        $menuS->price = $request->price;
        $menuS->image = $fileName;

        $image->move(public_path() . '/img-menu', $fileName);
        $menuS->save();

        return redirect(route('menu.land'));

        // dd($request->all());
    }

    public function edit($id)
    {
        $menu = Menu::all();
        $user = User::all();
        $data = Menu::findorfail($id);
        return view('menu.edit', compact('data', 'menu', 'user'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|decimal:0,2',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $menuUpdate = Menu::findorfail($id);
        $awal = $menuUpdate->image;

        $data = [
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $awal
        ];

        $request->image->move(public_path() . '/img-menu', $awal);
        $menuUpdate->update($data);

        return redirect(route('menu.land'));
    }

    public function delete($id)
    {
        $delete = Menu::findorfail($id);

        $file = public_path('/img-menu/') . $delete->image;
        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();

        return back();
    }
}
