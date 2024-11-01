<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SettingBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingBannerController extends Controller
{
    public function index()
    {
         $setting_banner = SettingBanner::paginate(10);
        return view('admin.setting_banner.index', compact('setting_banner'));
    }
 
    // Hiển thị form tạo danh mục mới
    public function create()
    {
        return view('admin.setting_banner.create');
    }
 
    // Xử lý lưu danh mục mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $imageMain = '';
        if ($request->hasFile('image')) {
            $imageMain = $request->file('image')->store('images', 'public');
            Storage::path($imageMain);
        }
        // dd($imageMain);
        $settingbanner = SettingBanner::create([
            'image' => $imageMain,
        ]);
 
        return redirect()->route('admin.setting_banner.index')->with('success', 'setting_banner created successfully.');
    }
 
    // Hiển thị form chỉnh sửa danh mục
    public function edit(SettingBanner $setting_banner)
    {
        return view('admin.setting_banner.edit', compact('setting_banner'));
    }
 
    // Xử lý cập nhật danh mục
    public function update(Request $request, SettingBanner $setting_banner)
    {
 
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ nếu có
            if ($setting_banner->image && Storage::exists($setting_banner->image)) {
                Storage::delete($setting_banner->image);
            }
            $image = $request->file('image');
            $setting_banner->image = $image->store('images', 'public');
        }
        $setting_banner->fill($request->all());
        $setting_banner->save();
        return redirect()->route('admin.setting_banner.index')->with('success', 'setting_banner updated successfully.');
    }
 
    // Xóa danh mục
    public function destroy(SettingBanner $setting_banner)
    {
        $setting_banner->delete();
        return redirect()->route('admin.setting_banner.index')->with('success', 'setting_banner deleted successfully.');
    }
}
