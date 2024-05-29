<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HistoryPayment;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::all();
        $history = HistoryPayment::all();
        return view('dashboard', compact('user', 'history'));
    }

    public function create()
    {
        $user = User::all();
        $history = HistoryPayment::all();
        return view('dashboard-create', compact('user', 'history'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'note' => 'nullable',
            'price' => 'required|decimal:0,2',
            'check' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $historyS = new HistoryPayment;
        $historyS->name = $request->name;
        $historyS->note = $request->note;
        $historyS->price = $request->price;
        $historyS->check = $request->check;

        $historyS->save();

        return redirect(route('dashboard'));
    }

    public function edit($id)
    {
        $user = User::all();
        $history = HistoryPayment::all();
        $data = HistoryPayment::findorfail($id);
        return view('dashboard-edit', compact('data', 'user', 'history'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'note' => 'nullable',
            'price' => 'required|decimal:0,2',
            'check' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $historyU = HistoryPayment::findorfail($id);

        $data = [
            'name' => $request['name'],
            'note' => $request['note'],
            'price' => $request['price'],
            'check' => $request['check']
        ];

        $historyU->update($data);

        return redirect(route('dashboard'));
    }

    public function delete($id)
    {
        $delete = HistoryPayment::findorfail($id);

        $delete->delete();

        return back();
    }

    public function search(Request $request)
    {
        $user = User::all();
        if ($request->has('search')) {
            $history = HistoryPayment::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $history = HistoryPayment::all();
        }

        return view('dashboard', ['history' => $history, 'user' => $user]);
    }
}
