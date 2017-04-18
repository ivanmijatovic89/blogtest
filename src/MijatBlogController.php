<?php

namespace Mijat\Blogtest;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class MijatBlogController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('blogtest::index', compact('current_time'));
    }
}