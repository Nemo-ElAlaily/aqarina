<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image as Image;

class BlogController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_blogs'])->only('index');
        $this -> middleware(['permission:create_blogs'])->only(['create', 'store']);
        $this -> middleware(['permission:update_blogs'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_blogs'])->only(['destroy']);
    } // end of construct

    public function index()
    {
        $blogs = Blog::paginate(PAGINATION_COUNT);
        return view ('admin.blogs.index', compact('blogs'));
    } // end of index

    public function create()
    {
        return view('admin.blogs.create');
    } // end of create

    public function store(Request $request)
    {
        //
    } // end of store

    public function show(Blog $blog)
    {
        //
    } // end of show


    public function edit(Blog $blog)
    {
        //
    } // end of edit

    public function update(Request $request, Blog $blog)
    {
        //
    } // end of update

    public function destroy(Blog $blog)
    {
        //
    } // end of destroy

} // end of controller
