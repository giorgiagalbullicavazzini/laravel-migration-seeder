<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        {{-- Include Assets --}}
        @vite('resources/js/app.js')
    </head>

    <body>
        <div class="container">
            <h1>Database treni</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Numero del treno</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Numero di carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train['id'] }}</th>
                        <td>{{ $train['train_number'] }}</td>
                        <td>{{ $train['company'] }}</td>
                        <td>{{ $train['departure_station'] }}</td>
                        <td>{{ $train['departure_time'] }}</td>
                        <td>{{ $train['arrival_station'] }}</td>
                        <td>{{ $train['arrival_time'] }}</td>
                        <td>{{ $train['carriage_number'] }}</td>
                        <td>{{ $train['on_time'] }}</td>
                        <td>{{ $train['cancelled'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
