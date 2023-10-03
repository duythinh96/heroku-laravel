<?php

namespace App\Http\Controllers\duythinh;

use App\Http\Controllers\Controller;
use App\Http\Controllers\duythinh\services\CloudinaryAPI;
use App\Http\Services\Database;
use Cloudinary\Api\Exception\ApiError;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CloudinaryController extends Controller
{
    const ROOT_VIEW = 'duythinh.cloudinary.';
    const TABLE = 'cloudinary';
    const PERSONAL = 'duythinh';
    const COLUMNS = ['public_id', 'url'];

    /**
     * @return View
     */
    public function index(): View
    {
        return view(self::ROOT_VIEW . 'index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ApiError
     */
    public function upload(Request $request): RedirectResponse
    {
        try {
            $response = CloudinaryAPI::upload(
                $request->get('url'),
                [],
                $request->get('cloud_name'),
                $request->get('api_key'),
                $request->get('api_secret'),
            );
            $url = $response['url'];

            return back()->with(['url' => $url]);
        } catch (\Error $e) {
            return back()->with(['error' => $e->getMessage()]);
        }

    }
}
