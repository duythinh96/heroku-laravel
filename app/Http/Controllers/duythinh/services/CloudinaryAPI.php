<?php

namespace App\Http\Controllers\duythinh\services;

use Cloudinary\Api\Exception\ApiError;
use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Api\Admin\AdminApi;

class CloudinaryAPI
{
    private static $cloudName = 'duhxagkcw';
    private static $apiKey = '488417395147758';
    private static $apiSecret = 'WVi8TKS46uWY53Zxjs5SbuNVpPM';

    protected static function init($cloudName = null, $apiKey = null, $apiSecret = null)
    {
        self::$cloudName = $cloudName ?? self::$cloudName;
        self::$apiKey = $apiKey ?? self::$apiKey;
        self::$apiSecret = $apiSecret ?? self::$apiSecret;
        Configuration::instance([
            'cloud' => [
                'cloud_name' => self::$cloudName,
                'api_key' => self::$apiKey,
                'api_secret' => self::$apiSecret
            ],
            'url' => [
                'secure' => true]]);
    }

    /**
     * @param string $url
     * @param array $options
     * @param $cloudName
     * @param $apiKey
     * @param $apiSecret
     * @return mixed
     * @throws ApiError
     */
    public static function upload(string $url, array $options, $cloudName = null, $apiKey = null, $apiSecret = null): mixed
    {
        self::init($cloudName, $apiKey, $apiSecret);

        //INIT PUBLIC ID
        $publicId = now()->timestamp;

        //UPLOAD IMAGE
        $cloudinary = new UploadApi();

        $response = $cloudinary->upload($url, ["public_id" => $publicId]);

        return $response;
    }
}