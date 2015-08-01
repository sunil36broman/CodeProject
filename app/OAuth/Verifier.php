<?php
/**
 * Created by PhpStorm.
 * User: edujr
 * Date: 8/1/15
 * Time: 03:53
 */

namespace CodeProject\OAuth;

use Auth;

class Verifier {
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;

    }
}