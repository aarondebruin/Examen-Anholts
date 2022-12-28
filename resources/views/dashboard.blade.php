@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form name="form" id="form" method="post" action="{{url('store')}}">
                        @csrf<div class="form-group">
                            <label>Button location</label>
                            <input type="text" id="button_location" name="button_location" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Button id</label>
                            <input type="text" id="buttonid" name="buttonid" class="form-control" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
