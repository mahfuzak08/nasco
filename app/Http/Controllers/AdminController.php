<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;

class AdminController extends Controller
{
    public function dashboard(){
        activity()->log('Logged in');
        $pages = Page::where('section_name', 'main')->get();
        return view('admin.home', compact('pages'));
    }
}
