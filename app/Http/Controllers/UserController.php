<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('users.users', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'notes' => $request->notes,
        ]);
        // return redirect()->back()->with(['success'=>'Enregistrement avec succès']);
        return response()->json(['status' => true]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'notes' => $request->notes,
        ]);
        // return redirect()->back()->with(['success'=>'Enregistrement avec succès']);
        return response()->json(['status' => true]);
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $user->delete();
            return response()->json(['status' => true, 'id' => $request->id]);
        }
    }
}
