<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\ModelMaster;
// use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $test_join = DB::table('users')
            ->select('users.*', 'level_user.level_name')
            ->leftJoin('level_user', 'level_user.id', 'users.is_admin')
            ->latest()->paginate(5);
        // dd($test_join);
        return view('master.modal.showUser', compact('getUser', 'test_join', 'rank'));
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
            $test_join = DB::table('users')
                ->select('users.*', 'level_user.level_name')
                ->leftJoin('level_user', 'level_user.id', 'users.is_admin')
                ->latest()->paginate(5);
            return view('master.modal.showUser', compact('getUser', 'test_join', 'rank'))->render();
        }
    }

    public function tambahUser()
    {
        $getLevelUser = DB::table('level_user')
            ->select('level_name', 'id')
            ->from('level_user')
            ->get();
        // dd($getLevelUser);
        return view('master.modal.tambahUser', compact('getLevelUser'));
    }

    public function simpanUser(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email'    => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // ddd($request);

        User::create($validatedData);
        // ModelMaster::insert($validatedData);
    }

    public function editUser($id)
    {
        $getUserEdit = User::findOrFail($id);
        $getLevelUser = DB::table('level_user')
            ->select('level_name', 'id')
            ->from('level_user')
            ->get();
        return view('master.modal.editUser', compact('getUserEdit', 'getLevelUser'))->render();
    }

    public function simpanEditUser(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $rules = [
            'name'     => $request->name,
            'username' => $request->username,
            'email'    => $request->email,
            'password' => $request->password,
            'is_admin' => $request->is_admin,
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

    public function getSearch($search)
    {
        $getUser = User::latest()->paginate(5);
        $rank = $getUser->firstItem();
        $test_join = DB::table('users')
            ->select('users.*', 'level_user.level_name')
            ->leftJoin('level_user', 'level_user.id', 'users.is_admin')
            ->where('users.name', 'LIKE', '%' . $search . '%')
            ->latest()->paginate(5);
        // dd($test_join);
        return view('master.modal.showUser', compact('getUser', 'test_join', 'rank'));
    }
}
