@extends('layouts.app')

@section('content')
<div class="container">

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>Knop toegevoegd</p>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voeg knoppen toe</div>
                <div class="card-body">
                    <form name="form"  method="post" action="{{url('store')}}">
                        @csrf<div class="form-group">
                            <label>Knop locatie</label>
                            <input type="text" id="button_location" name="button_location" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Knop ID</label>
                            <input type="text" id="buttonid" name="buttonid" class="form-control" required="">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<br>

    @if (\Session::has('danger'))
        <div class="alert alert-danger">
            <p>Knop verwijderd</p>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verwijder knoppen</div>
                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Knop locatie</th>
                        <th scope="col">buttonid</th>
                        <th scope="col">Verwijder</th>
                    </tr>
                    </thead>
                    @foreach($shellybuttons as $data)
                        <form name="form"  method="post" action="{{url('destroy', [$data->id])}}">
                        <tr>
                            @csrf
                            @method('DELETE')
                            <td>{{$data->id}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->button_location}}</td>
                            <td>{{$data->buttonid}}</td>
                            <td><button class="btn btn-danger" type="submit">Verwijder </button> </td>
                        </tr>
                        </form>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
