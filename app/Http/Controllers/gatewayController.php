<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gatewayController extends Controller {

    public static function network() {
        //whether ip is from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
            //whether ip is from proxy
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
            //whether ip is from remote address
        } else {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }

        //check to see if the dedicated network is used
        if ($ip_address == "127.0.0.1") {
            return view('login');
        } else {
            return view('restricted_access');
        }
    }

}
