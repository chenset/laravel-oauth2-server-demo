@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="{{url('oauth/access_token')}}" method="post">
                            <input name="grant_type" value="authorization_code" type="text"/>
                            <input name="client_id" value="1" type="text"/>
                            <input name="client_secret" value="1" type="text"/>
                            <input name="redirect_uri" value="http://172.16.20.39:89/home" type="text"/>
                            <input name="code" value="{{Request::get('code')}}" type="text"/>
                            <input type="submit" value="submit"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
