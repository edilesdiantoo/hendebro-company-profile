<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hdr;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Validation\Validator;

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
        // dd($active);
        return view('mngContent.blog', compact('active'));
    }

    public function showBlog()
    {
        // $get_blog = DB::table('blog')->get();
        // $data = Blog::join('state', 'state.country_id', '=', 'country.country_id')
        //     ->join('hdrs', 'city.state_id', '=', 'state.state_id')
        //     ->get(['blog.country_name', 'state.state_name', 'city.city_name']);

        $getBlog = DB::table('blogs')
            ->select('blogs.*', 'hdrs.hdr_name', 'categories.name as category_name')
            ->leftJoin('hdrs', 'hdrs.id', 'blogs.hdr_id')
            ->leftJoin('categories', 'categories.id', 'blogs.category_id')
            ->latest()->paginate(5);
        // dd($getBlog);
        return view('mngContent.modal.showBlog', compact('getBlog'));
    }

    public function tambahBlog()
    {
        $get_hdr_data = Hdr::all();
        $get_category_data = Category::all();
        return view('mngContent.modal.tambahBlog', compact('get_category_data', 'get_hdr_data'))->render();
    }

    public function simpanBlog(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul'       => 'required',
                'category_id' => 'required',
                'hdr_id'      => 'required',
                'hit'         => 'required',
                'image'      => 'image|file|max:10000',
            ]
        );

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-blog');
        }

        // dd($validatedData);

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['exerpt'] = Str::limit(strip_tags($request->body), 200);

        $blog_insert = Blog::create($validatedData);
        return Response()->json($blog_insert);

        // return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    public function fetch_blog(Request $request)
    {
        if ($request->ajax()) {
            $getBlog = DB::table('blogs')
                ->select('blogs.*', 'hdrs.hdr_name', 'categories.name as category_name')
                ->leftJoin('hdrs', 'hdrs.id', 'blogs.hdr_id')
                ->leftJoin('categories', 'categories.id', 'blogs.category_id')
                ->latest()->paginate(5);
            return view('mngContent.modal.showBlog', compact('getBlog'))->render();
        }
    }

    public function editBlog($id)
    {
        $getCategoty = Category::all();
        $getBlog = Blog::findOrFail($id);
        $getMenuHdr = Hdr::all();

        return view('mngContent.modal.editBlog', compact('getBlog', 'getCategoty', 'getMenuHdr'))->render();
    }

    public function deleteBlog($id)
    {
        // $data = User::findOrFail($id);
        $hapusBlog = Blog::destroy($id);
        return response()->json($hapusBlog, 200);
    }

    public function simpanBlogEdit(Request $request)
    {
        $editBlog =
            [
                'judul'       => 'required',
                'category_id' => 'required',
                'hdr_id'      => 'required',
                'hit'         => 'required',
                'image'      => 'image|file|max:10000',
            ];

        $validatedData = $request->validate($editBlog);

        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('post-blog');
        }

        // dd($validatedData);

        $blogSaveEdit = Blog::where('id', $request->id)
            ->update($validatedData);
        return Response()->json($blogSaveEdit);

        // return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }
}
