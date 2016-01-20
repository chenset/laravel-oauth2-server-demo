@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        Your Application's Landing Page.
                        <br/>

                        <a href="http://172.16.20.39:89/oauth/authorize?client_id=1&redirect_uri=http://172.16.20.39:89/home&response_type=code&scope=1">OAuth</a>
                        <br/>

                        <a href="{{url('user')}}?access_token=">getUser(Add access token)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
