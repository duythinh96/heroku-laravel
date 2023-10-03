@extends('duythinh.parts.layout')

@section('content')
    <h1>Api</h1>
    <div class="alert alert-secondary">
        Api Service
    </div>
    <input name="time" id='time' class="form-control mb-1">
    <input type="checkbox" id='loop' class="form-control mb-1">
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
    <div id="response" class="card card-body"></div>

    <script>
        async function callApi() {
            const url = document.getElementById('url').value
            const time = document.getElementById('time').value
            const loop = document.getElementById('loop').value
            const selectElement = document.getElementById('url').value
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const selectedValue = selectedOption.value;
            const options = document.getElementById('options').innerHTML;

            //Loop with min 10 sec
            if(loop) {
                setInterval(async () => {
                    const response = await fetch(url, {
                        method: selectedValue,
                        headers: {"Content-Type": "application/json",},
                        body: JSON.stringify(options)
                    });

                    document.getElementById('response').innerHTML = JSON.stringify(response)
                }, time < 10000 ? 10000 : time)
                return;
            }
            //Call one time with min 10 sec
            setTimeout(async () => {
                const response = await fetch(url, {
                    method: selectedValue,
                    headers: {"Content-Type": "application/json",},
                    body: JSON.stringify(options)
                });

                document.getElementById('response').innerHTML = JSON.stringify(response)
            }, time < 10000 ? 10000 : time)
        }
    </script>
@endsection
