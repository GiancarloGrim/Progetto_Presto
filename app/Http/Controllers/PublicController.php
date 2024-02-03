<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class PublicController extends Controller
{
    public function welcome() {
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        
        return view('welcome', compact('announcements'));
    }


}
