<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\ModelMaster;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MasterController extends Controller
{
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
            'name'     => 'required|max:150',
            'username' => ['required', 'min:3', 'max:150', 'unique:users'],
            'email'    => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:150',
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

    public function category()
    {
        $getCategory = category::latest()->paginate(5);
        $active = "category";
        // dd($getCategory);

        return view('master.category', compact('getCategory', 'active'));
    }

    public function showCategory()
    {
        $getCategory = Category::latest()->paginate(5);
        // $rank = $getCategory->firstItem();
        // $test_join = DB::table('users')
        //     ->select('users.*', 'level_user.level_name')
        //     ->leftJoin('level_user', 'level_user.id', 'users.is_admin')
        //     ->latest()->paginate(5);
        // dd($getCategory);

        return view('master.modal.showCategory', compact('getCategory'));
    }

    public function fetch_category(Request $request)
    {
        if ($request->ajax()) {
            $getCategory = Category::latest()->paginate(5);
            // $rank = $getCategory->firstItem();
            // $test_join = DB::table('users')
            //     ->select('users.*', 'level_user.level_name')
            //     ->leftJoin('level_user', 'level_user.id', 'users.is_admin')
            //     ->latest()->paginate(5);
            return view('master.modal.showUser', compact('getCategory'))->render();
        }
    }

    public function tambahCategory()
    {
        // $getLevelUser = DB::table('level_user')
        //     ->select('level_name', 'id')
        //     ->from('level_user')
        //     ->get();
        // dd($getLevelUser);
        return view('master.modal.tambahCategory');
    }

    public function simpanCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|max:255',
            'slug' => ['required'],
            'title'    => 'required',
        ]);

        // ddd($request);

        Category::create($validatedData);
        // ModelMaster::insert($validatedData);
    }

    public function editCategory($id)
    {
        $getCategoryEdit = Category::findOrFail($id);
        // $getLevelUser = DB::table('level_user')
        //     ->select('level_name', 'id')
        //     ->from('level_user')
        //     ->get();
        return view('master.modal.editCategory', compact('getCategoryEdit'))->render();
    }

    public function simpanEditCategory(Request $request, $id)
    {
        $data = category::findOrFail($id);
        $rules = [
            'name'  => $request->name,
            'slug'  => $request->slug,
            'title' => $request->title,
        ];

        $saveEdit =  Category::where('id', $id)
            ->update($rules);

        return response()->json($saveEdit, 200);
        // ModelMaster::insert($validatedData);
    }

    public function deleteCategory($id)
    {
        // $data = User::findOrFail($id);
        $hapusUser = Category::destroy($id);
        return response()->json($hapusUser, 200);
    }

    public function getSearchCategory($search)
    {
        // $getCategoryData = Category::take(10)->skip(10)->get();
        // if (isset($search) ? $search : false) {
        //     $getCategoryData->where('name', 'like', '%' . $search . '%');
        // } //sama dengan yang dibawah
        $getCategory =  DB::table('categories')
            ->select('*')
            ->where('name', 'LIKE', '%' . $search . '%')
            ->latest()->paginate(5);
        // dd($test);
        return view('master.modal.showCategory', compact('getCategory'));
    }
}
