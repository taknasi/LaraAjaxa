<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Traits\PhotoTrait;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use PhotoTrait;

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
        $filePath = null;
        if ($request->hasFile('avatar')) {
            $filePath = $this->uploadP('users', $request->avatar);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'notes' => $request->notes,
            'photo' => $filePath
        ]);
        // return redirect()->back()->with(['success'=>'Enregistrement avec succès']);
        return response()->json(['status' => true]);
    }
    public function lol()
    {
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
