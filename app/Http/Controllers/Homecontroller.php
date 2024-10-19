<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContentDetail;
use App\Models\Post;
use App\Models\SettingBanner;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function index(){
        $posts = Post::select('id', 'image_main')->limit('10')->get();
        $category = Category::where('name','like','%Sa%')->get();
        $setting_banner = SettingBanner::first();
        // $content_detail1 = ContentDetail::where('content_id', 1)->where('id',1)->first();
        // $content_detail2 = ContentDetail::where('content_id', 1)->where('id',2)->first();
        // $content_detail3 = ContentDetail::where('content_id', 1)->where('id',3)->first();
        // $content_detail4 = ContentDetail::where('content_id', 1)->where('id',4)->first();
        return view('home', compact('posts','category','setting_banner'));
    }
}
