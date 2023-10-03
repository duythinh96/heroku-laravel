@extends('duythinh.parts.layout')

@section('content')
    <h1>Api</h1>
    <div class="alert alert-secondary">
        Api Service
    </div>
    <select name="method" id="method">
        <option value="get">GET</option>
        <option value="post">POST</option>
        <option value="put">PUT</option>
        <option value="delete">DELETE</option>
    </select>
    <input name="url" id='url' class="form-control mb-1">
    <textarea class="form-control" id="options"></textarea>
    <div class="my-3">
        <button class="btn btn-sm btn-dark" onclick="callApi()">
            Call Api
        </button>
    </div>
    <div id="response" class="card card-body">

    </div>

    <script>
        async function callApi() {
            const url = document.getElementById('url').value
            const selectElement = document.getElementById('url').value
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const selectedValue = selectedOption.value;
            const options = document.getElementById('options').innerHTML;
            const response = await fetch(
                url,
                {
                    method: selectedValue,
                    options: options,
                });

            document.getElementById('response').innerHTML = JSON.stringify(response)
            console.log(response);
        }
    </script>
@endsection