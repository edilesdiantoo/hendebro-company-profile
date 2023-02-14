<?php

namespace App\Http\Controllers;

use App\Models\Hdr;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\Category;
use App\Models\SourceCode;
use Illuminate\Http\Request;
use App\Models\Category_menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MNGContentController extends Controller
{
    public function menucontent()
    {
        $getMenuContent = Menu::all();
        $active = "hdr";
        return view('mngContent.menuContent', compact('getMenuContent', 'active'));
    }

    public function showMenuContent()
    {
        // $getMenuContent = Menu::latest()->paginate(5);
        $getMenuContent = DB::table('menus')
            ->select('menus.name as name_menu', 'menus.status', 'menus.id', 'menus.keterangan', 'category_menus.name as name_category_menu')
            ->leftJoin('category_menus', 'menus.category_menu_id', 'category_menus.id')
            ->paginate(5);
        // dd($getMenuContent);
        return view('mngContent.modal.showMenuContent', compact('getMenuContent'));
    }

    public function tambahMenuContent()
    {
        $getCategoryMenu = Category_menu::all();
        return view('mngContent.modal.tambahMenuContent', compact('getCategoryMenu'));
    }

    public function simpanMenuContent(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|max:50',
            'category_menu_id' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);
        Menu::create($validatedData);
    }

    public function editMenuContent($id)
    {
        $getMenuContent = Menu::findOrFail($id);
        $getCategoryMenu = Category_menu::all();

        return view('mngContent.modal.editMenuContent', compact('getMenuContent', 'getCategoryMenu'))->render();
    }

    public function simpanEditMenuContent(Request $request, $id)
    {
        // $data = Hdr::findOrFail($id);
        $rules = [
            'name'             => $request->name,
            'category_menu_id' => $request->category_menu_id,
            'keterangan'       => $request->keterangan,
            'status'           => $request->status,
        ];


        $saveEdit =  Menu::where('id', $id)
            ->update($rules);

        return response()->json($saveEdit, 200);
    }

    public function deleteMenuConten($id)
    {
        // $data = User::findOrFail($id);
        $hapusMenuHdr = Menu::destroy($id);
        return response()->json($hapusMenuHdr, 200);
    }

    public function getSearchMenu($search)
    {
        $getMenuContent = DB::table('menus')
            ->select('menus.name as name_menu', 'menus.status', 'menus.id', 'menus.keterangan', 'category_menus.name as name_category_menu')
            ->leftJoin('category_menus', 'menus.category_menu_id', 'category_menus.id')
            ->where('menus.name', 'LIKE', '%' . $search . '%')
            ->latest()->paginate(5);
        // dd($test_join);
        return view('master.modal.showMenuContent', compact('getMenuContent'));
    }

    public function blog()
    {
        $active = "blog";
        // dd($active);
        return view('mngContent.blog', compact('active'));
    }

    public function showBlog()
    {
        $getBlog = DB::table('blogs')
            ->select('blogs.*', 'menus.name as menu_name', 'categories.name as category_name')
            ->leftJoin('menus', 'menus.id', 'blogs.menu_id')
            ->leftJoin('categories', 'categories.id', 'blogs.category_id')
            ->latest()->paginate(5);
        // dd($getBlog);
        return view('mngContent.modal.showBlog', compact('getBlog'));
    }

    public function tambahBlog()
    {
        $get_hdr_data = Menu::all();
        $get_category_data = Category::all();
        return view('mngContent.modal.tambahBlog', compact('get_category_data', 'get_hdr_data'))->render();
    }

    public function simpanBlog(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul'       => 'required',
                'category_id' => 'required',
                'menu_id'      => 'required',
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

    public function scode()
    {
        $active = "scode";
        // dd($active);
        return view('mngContent.scode', compact('active'));
    }

    public function showScode()
    {

        $getScode = DB::table('source_codes')
            ->select('source_codes.*', 'menus.name as menu_name', 'categories.name as category_name')
            ->leftJoin('menus', 'menus.id', 'source_codes.menu_id')
            ->leftJoin('categories', 'categories.id', 'source_codes.category_id')
            ->latest()->paginate(5);
        // dd($getScode);
        return view('mngContent.modal.showScode', compact('getScode'));
    }

    public function tambahScode()
    {
        $get_hdr_data = Menu::all();
        $get_category_data = Category::all();
        return view('mngContent.modal.tambahScode', compact('get_category_data', 'get_hdr_data'))->render();
    }

    public function simpanScode(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul'       => 'required',
                'sub_judul'   => 'required',
                'category_id' => 'required',
                'menu_id'     => 'required',
                'keterangan'  => 'required',
                'image'       => 'image|file|max:10000',
            ]
        );

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-source-code');
        }

        $blog_insert = SourceCode::create($validatedData);
        return Response()->json($blog_insert);
    }

    public function editScode($id)
    {
        $getCategoty = Category::all();
        $getScode = SourceCode::findOrFail($id);
        $getMenuHdr = Hdr::all();

        return view('mngContent.modal.editScode', compact('getScode', 'getCategoty', 'getMenuHdr'))->render();
    }
}
