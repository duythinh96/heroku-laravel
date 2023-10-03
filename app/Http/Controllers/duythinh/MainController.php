<?php

namespace App\Http\Controllers\duythinh;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class MainController extends Controller
{
    const ROOT_VIEW = 'duythinh.';

    /**
     * @return View
     */
    public function index(): View
    {
        $root = '/personal/duythinh/';
        return view(self::ROOT_VIEW . 'index')->with(['list' => [
            ['label' => 'Guide', 'link' => $root . 'guide'],
            ['label' => 'Cloudinary', 'link' => $root . 'cloudinary'],
        ]]);
    }
}
