@extends('duythinh.parts.layout')

@section('content')
    <h1>MAIN MENU</h1>

    <div class="row g-3">
        @foreach($list ?? [] as $item)
            <div class="col-3">
                @include('duythinh.parts.main-card', $item)
            </div>
        @endforeach
    </div>
@endsection