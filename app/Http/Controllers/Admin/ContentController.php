<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
         $contents = Content::paginate(10);
        return view('admin.contents.index', compact('contents'));
    }
 
    // Hiển thị form tạo danh mục mới
    public function create()
    {
        return view('admin.contents.create');
    }
 
    // Xử lý lưu danh mục mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
 
        Content::create([
            'name' => $request->name,
        ]);
 
        return redirect()->route('admin.contents.index')->with('success', 'contents created successfully.');
    }
 
    // Hiển thị form chỉnh sửa danh mục
    public function edit(Content $content)
    {
        return view('admin.contents.edit', compact('content'));
    }
 
    // Xử lý cập nhật danh mục
    public function update(Request $request, Content $content)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
 
        $content->update([
            'name' => $request->name,
        ]);
 
        return redirect()->route('admin.contents.index')->with('success', 'contents updated successfully.');
    }
 
    // Xóa danh mục
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->route('admin.contents.index')->with('success', 'contents deleted successfully.');
    }
}
