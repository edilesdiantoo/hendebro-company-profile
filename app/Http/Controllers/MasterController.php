<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\ModelMaster;
// use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Response;
// use \Cviebrock\EloquentSluggable\Services\SlugService;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user()
    {
        $getUser = User::latest()->paginate(5);
        $active = "user";

        return view('master.user', compact('getUser', 'active'));
    }

    public function showUser()
    {
        $getUser = User::latest()->paginate(5);
        $rank = $getUser->firstItem();
        return view('master.modal.showUser', compact('getUser', 'rank'));
        // return view('master.modal.showUser', [
        //     'getUser' => User::latest()
        //         // ->Filter(request(['search', 'name', 'username']))
        //         ->paginate(5)
        //     // ->withQueryString(),
        // ]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $getUser = User::latest()->paginate(5);
            $rank = $getUser->firstItem();
            return view('master.modal.showUser', compact('getUser', 'rank'))->render();
        }
    }

    public function tambahUser()
    {
        return view('master.modal.tambahUser', [
            'getEdit' => User::where('id', auth()->user()->id)->get()
        ]);
    }

    public function simpanUser(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email'    => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // ddd($request);

        User::create($validatedData);
        // ModelMaster::insert($validatedData);
    }

    public function editUser($id)
    {
        return view('master.modal.editUser', [
            'getUser' => User::findOrFail($id),
        ]);
    }

    public function simpanEditUser(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $rules = [
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => $request->password,
        ];

        $rules['password'] = Hash::make($rules['password']);


        $saveEdit =  User::where('id', $id)
            ->update($rules);

        return response()->json($saveEdit, 200);
        // ModelMaster::insert($validatedData);
    }

    public function deleteUser($id)
    {
        // $data = User::findOrFail($id);
        $hapusUser = User::destroy($id);
        return response()->json($hapusUser, 200);
    }
}
