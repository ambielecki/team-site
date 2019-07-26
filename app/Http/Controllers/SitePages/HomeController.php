<?php

namespace App\Http\Controllers\SitePages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller {
    public function getIndex(): View {
        return view('site_pages.home.index');
    }
}
