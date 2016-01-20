@extends('layouts.app')
<style>
    input[type=text] {
        width: 500px;
    }
    input[readonly] {
        background: #CCC;
    }

</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <h2>1.Grant</h2>

                        <form action="{{url('oauth/authorize')}}" method="get">
                            <label>
                                client_id:
                                <input type="text" name="client_id" value="1"/>
                            </label>
                            <br/>
                            <label>
                                redirect_uri:
                                <input type="text" name="redirect_uri" value="http://172.16.20.39:89"/>
                            </label>
                            <br/>
                            <label>
                                response_type:
                                <input type="text" name="response_type" value="code" readonly/>
                            </label>
                            <br/>
                            <label>
                                scope:
                                <input type="text" name="scope" value="1"/>
                            </label>
                            <br/>
                            <input type="submit" value="Grant"/>
                        </form>
                        <hr/>
                        <h2>2.Get access_token</h2>

                        <form action="{{url('oauth/access_token')}}" method="post">
                            <label>
                                grant_type:
                                <input name="grant_type" value="authorization_code" type="text" readonly/>
                            </label>
                            <br/>
                            <label>
                                client_id:
                                <input name="client_id" value="1" type="text"/>
                            </label>
                            <br/>
                            <label>
                                client_secret:
                                <input name="client_secret" value="1" type="text"/>
                            </label>
                            <br/>
                            <label>
                                redirect_uri:
                                <input name="redirect_uri" value="http://172.16.20.39:89" type="text"/>
                            </label>
                            <br/>
                            <label>
                                code
                                <input name="code" value="{{Request::get('code')}}" type="text"/>
                            </label>
                            <br/>
                            <input type="submit" value="submit"/>
                        </form>

                        <hr/>

                        <h2>3.API test with access_token</h2>

                        <form action="{{url('user')}}" method="get">
                            <label>
                                access_token:
                                <input type="text" name="access_token" value=""/>
                            </label>
                            <input type="submit" value="API Test"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
