<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return View
     */
    public function welcome(): View
    {
        return view('page.welcome');
    }
}
