<?php

namespace App\Http\Controllers;

use App\Models\Hdr;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class MNGContentController extends Controller
{
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

    public function blog()
    {
        $active = "blog";

        return view('mngContent.blog', compact('active'));
    }

    public function showBlog()
    {
        // $get_blog = DB::table('blog')->get();
        $get_blog = DB::table('blog')
            ->select('blog.*', 'hdrs.hdr_name', 'categories.name as category_name')
            ->leftJoin('hdrs', 'hdrs.id', 'blog.hdr_id')
            ->leftJoin('categories', 'categories.id', 'blog.category_id')
            ->latest()->paginate(5);
        // dd($get_blog);
        return view('mngContent.modal.showBlog', compact('get_blog'));
    }

    public function tambahBlog()
    {
        $get_hdr_data = Hdr::all();
        $get_category_data = Category::all();
        return view('mngContent.modal.tambahBlog', compact('get_category_data', 'get_hdr_data'))->render();
    }

    public function simpanBlog(Request $request)
    {
        $validatedData = $request->validate([
            'judul'       => 'required',
            'category_id' => 'required',
            'hdr_id'      => 'required',
            'gambar'      => 'image|file|max:100000',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-category ');
        }
        // Hdr::create($validatedData);
        $insertBlog = DB::table('blog')->insert($validatedData);
    }
}
