<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentDetail;
use Illuminate\Http\Request;

class ContentDetailController extends Controller
{
    public function index()
    {
         $contents = ContentDetail::paginate(10);
        return view('admin.contents_detail.index', compact('contents'));
    }
 
    // Hiển thị form tạo danh mục mới
    public function create()
    {
         $contents = Content::all();
        return view('admin.contents_detail.create', compact('contents'));
    }
 
    // Xử lý lưu danh mục mới vào cơ sở dữ liệu
    public function store(Request $request)
    {   
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|string|max:255',
        // ]);
 
        ContentDetail::create([
            'name' => '',
            'content' => $request->content,
            'content_id' => $request->content_id
        ]);
 
        return redirect()->route('admin.content_detail.index')->with('success', 'contents created successfully.');
    }
 
    // Hiển thị form chỉnh sửa danh mục
    public function edit(ContentDetail $content_detail)
    {
        $contents = Content::all();
        return view('admin.contents_detail.edit', compact('content_detail','contents'));
    }
 
    // Xử lý cập nhật danh mục
    public function update(Request $request, ContentDetail $content_detail)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        // ]);
 
        $content_detail->update([
            'name' => '',
            'content' => $request->content,
            'content_id' => $request->content_id
        ]);
 
        return redirect()->route('admin.content_detail.index')->with('success', 'contents updated successfully.');
    }
 
    // Xóa danh mục
    public function destroy(ContentDetail $content_detail)
    {
        $content_detail->delete();
        return redirect()->route('admin.content_detail.index')->with('success', 'contents deleted successfully.');
    }
}
