@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Laatst gezien</th>
                <th scope="col">Batterij</th>
                <th scope="col">Knop locatie</th>
                <th scope="col">Knop ID</th>
            </tr>
            </thead>
            <tbody>
            @foreach($buttonlogs as $data)
            <tr>

                    <td>{{$data->id}}</td>
                    <td>{{$data->lastseen}}</td>
                    <td>{{$data->battery}}</td>
                    <td>{{$data->button_location}}</td>
                    <td>{{$data->buttonid}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
