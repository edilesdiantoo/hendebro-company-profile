<?php

namespace App\Http\Controllers;

use App\Models\Hdr;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
// use Illuminate\Support\Str;
use App\Models\ModelMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Response;
// use \Cviebrock\EloquentSluggable\Services\SlugService;

class MNGContenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hdr()
    {
        $get_hdr_data = Hdr::all();
        $active = "hdr";
        return view('mngContent.hdr', compact('get_hdr_data', 'active'));
    }

    public function showMenuHdr()
    {
        $getMenuHdr = Hdr::latest()->paginate(5);
        // $rank = $getUser->firstItem();
        // $test_join = DB::table('users')
        //     ->select('users.*', 'level_user.level_name')
        //     ->leftJoin('level_user', 'level_user.id', 'users.is_admin')
        //     ->latest()->paginate(5);
        // dd($test_join);
        return view('mngContent.modal.showMenuHdr', compact('getMenuHdr'));
    }

    public function tambahMenuHdr()
    {
        $test = 'test';
        // $getLevelUser = DB::table('level_user')
        //     ->select('level_name', 'id')
        //     ->from('level_user')
        //     ->get();
        // dd($getLevelUser);
        return view('mngContent.modal.tambahMenuHdr', compact('test'));
    }

    public function simpanMenuHdr(Request $request)
    {
        $validatedData = $request->validate([
            'hdr_name'     => 'required|max:50',
            'title' => 'required',
        ]);
        Hdr::create($validatedData);
    }

    public function editMenuHdr($id)
    {
        $getMenuhdrData = Hdr::findOrFail($id);

        return view('mngContent.modal.editMenuHdr', compact('getMenuhdrData'))->render();
    }

    public function simpanEditMenuHdr(Request $request, $id)
    {
        // $data = Hdr::findOrFail($id);
        $rules = [
            'hdr_name'     => $request->hdr_name,
            'title' => $request->title,
        ];


        $saveEdit =  Hdr::where('id', $id)
            ->update($rules);

        return response()->json($saveEdit, 200);
    }

    public function deleteMenuHdr($id)
    {
        // $data = User::findOrFail($id);
        $hapusMenuHdr = Hdr::destroy($id);
        return response()->json($hapusMenuHdr, 200);
    }
}
