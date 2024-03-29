<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        $count = Announcement::where('is_accepted', true)->count();
        return view('welcome', compact('announcements', 'count'));
    }
    
    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
    
    public function searchAnnouncement(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('announcements.index', compact('announcements'));
    }
    
    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
    
}
