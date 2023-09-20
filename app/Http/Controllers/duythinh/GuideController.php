<?php

namespace App\Http\Controllers\duythinh;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    const ROOT_VIEW = 'duythinh.guide.';
    /**
     * @return View
     */
    public function index(): View
    {
        return view(self::ROOT_VIEW . 'index');
    }
}
