<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class VenueController extends Controller
{
    public function index()
    {
        $user = User::all();
        $venue = Venue::all();
        return view('venue.land', compact('venue', 'user'));
    }

    public function create()
    {
        $user = User::all();
        $venue = Venue::all();
        return view('venue.create', compact('venue', 'user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $image = $request->image;
        $fileName = date('Y-m-d') . $image->getClientOriginalName();

        $venueS = new Venue;
        $venueS->name = $request->name;
        $venueS->image = $fileName;

        $image->move(public_path() . '/img-venue', $fileName);
        $venueS->save();

        return redirect(route('venue.land'));

        // dd($request->all());
    }

    public function edit($id)
    {
        $user = User::all();
        $venue = Venue::all();
        $data = Venue::findorfail($id);
        return view('venue.edit', compact('data', 'venue', 'user'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $venueUpdate = Venue::findorfail($id);
        $awal = $venueUpdate->image;

        $data = [
            'name' => $request['name'],
            'image' => $awal
        ];

        $request->image->move(public_path() . '/img-venue', $awal);
        $venueUpdate->update($data);

        return redirect(route('venue.land'));
    }

    public function delete($id)
    {
        $delete = Venue::findorfail($id);

        $file = public_path('/img-venue/') . $delete->image;
        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();

        return back();
    }
}
