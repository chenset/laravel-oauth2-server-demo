<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;


class UserController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser()
    {
        dump(User::findOrFail(Authorizer::getResourceOwnerId())->toArray());
        return 'UID:' . Authorizer::getResourceOwnerId();
    }
}
