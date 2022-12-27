@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Lastseen</th>
                <th scope="col">Battery</th>
                <th scope="col">Buttonid</th>
            </tr>
            </thead>
            <tbody>
            @foreach($buttonlogs as $data)
            <tr>

                    <td>{{$data->id}}</td>
                <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td>{{$data->lastseen}}</td>
                    <td>{{$data->battery}}</td>
                    <td>{{$data->buttonid}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
