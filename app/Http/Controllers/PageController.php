<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        $html = view( 'welcome' )->render();
        file_put_contents(\storage_path("app/public/index.html"), $html);

        return view('welcome');
    }
}
