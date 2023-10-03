@extends('duythinh.parts.layout')

@section('content')
    <h1>Api</h1>
    <div class="alert alert-secondary">
        Api Service
    </div>
    <input name="url" id='url' class="form-control mb-1">
    <div class="my-3">
        <button class="btn btn-sm btn-dark" onclick="callApi">
            Call Api
        </button>
    </div>
    <div id="response" class="card card-body">

    </div>

    <script>
        async function callApi() {
            const url = document.getElementById('url').value

            const response = await fetch(url);

            document.getElementById('response').innerHTML = JSON.stringify(response)
            console.log(response);
        }
    </script>
@endsection