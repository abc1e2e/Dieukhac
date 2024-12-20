<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SliderBar;
use Illuminate\Http\Request;

class SliderBarController extends Controller
{
    public function index()
    {
        $sliderbars = SliderBar::with(['post'])->paginate(10); // Phân trang với 10 bài viết mỗi trang
        // dd($sliderbars);
        return view('admin.sliderbar.index', compact('sliderbars'));
    }

    public function create()
    {   $posts = Post::with('category')->get();
        return view('admin.sliderbar.create', compact('posts'));
    }

    public function store(Request $request)
    {   
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'post_id' => 'required|unique:post_slider_bar,post_id',
            // Thêm các quy tắc khác nếu cần
        ]);
        
        SliderBar::create($request->all());

        return redirect()->route('admin.sliderbar.index')->with('success', 'SliderBar created successfully.');
    }

    public function edit(SliderBar $sliderbar)
    {    $posts = Post::with('category')->get();
        return view('admin.sliderbar.edit', compact('sliderbar', 'posts'));
    }

    public function update(Request $request, SliderBar $sliderbar)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            // Thêm các quy tắc khác nếu cần
        ]);
        $sliderbar->fill($request->all());
        $sliderbar->save();
        return redirect()->route('admin.sliderbar.index')->with('success', 'SliderBar updated successfully.');
    }

    public function destroy(SliderBar $sliderbar)
    {
        $sliderbar->delete();
        return redirect()->route('admin.sliderbar.index')->with('success', 'SliderBar deleted successfully.');
    }
}
