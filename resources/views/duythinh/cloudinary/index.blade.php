@extends('duythinh.parts.layout')

@section('content')
    <h1>Cloudinary</h1>
    <div class="alert alert-secondary">
        *Note: credentials not required (it will use my key) but this is public and free so will be limit
    </div>
    <form class="my-3" method="post" action="/personal/duythinh/cloudinary/upload">
        @csrf
        <div class="d-flex mb-2">
            <label style="width: 100px;">Cloud Name</label>
            <input
                class="form-control"
                name="cloud_name"
            >
        </div>
        <div class="d-flex mb-2">
            <label style="width: 100px;">Api key</label>
            <input
                class="form-control"
                name="api_key"
            >
        </div>
        <div class="d-flex mb-2">
            <label style="width: 100px;">Api secret</label>
            <input
                class="form-control"
                name="api_secret"
            >
        </div>
        <div class="d-flex mb-2">
            <label style="width: 100px;">Url</label>
            <input
                class="form-control"
                name="cloud_name"
            >
        </div>
        <button class="btn btn-primary rounded-1">
            Upload
        </button>
    </form>

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif

    @if(session()->has('url'))
        <span class="text-success">Upload success full:</span>
        <div class="alert alert-success">
            {!! session('url') !!}
        </div>

        <img src="{{ session('url') }}" alt="uploaded image">
    @endisset

    @if(isset($data) && is_array($data))
        Uploaded Items:
        <div class="row">
            @foreach(array_reverse($data) as $item)
                <div class="col-4">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>{{ data_get($item, 0) }}</h5>
                            </div>
                            <div class="col-6">
                                <img src="{{ data_get($item, 1) }}" alt="uploaded image">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <div class="my-3">
        <pre class="text-bg-dark rounded p-3" style="font-size: 12px">&lt;?php

    namespace App\Http\Controllers\duythinh\services;

    use Cloudinary\Api\Exception\ApiError;
    use Cloudinary\Cloudinary;
    use Cloudinary\Configuration\Configuration;
    use Cloudinary\Api\Upload\UploadApi;
    use Cloudinary\Api\Admin\AdminApi;

    class CloudinaryAPI
    {
        private static $cloudName = 'your_cloud_name';
        private static $apiKey = 'your_api_key';
        private static $apiSecret = 'your_api_secret';

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
?&gt;</pre>
    </div>
@endsection