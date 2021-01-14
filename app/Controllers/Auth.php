<?php

namespace App\Controllers;

use App\Models\AuthModel;
use Firebase\JWT\JWT;
use Config\Services;

use function PHPSTORM_META\type;

class Auth extends BaseController
{
    public function login()
    {
        $auth = new AuthModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $loginInfo = $auth->getUserInfo($username, $password);

        // print_r($loginInfo);

        if (count($loginInfo)) {
            $payload = array(
                "iss" => "Penghuni Kost",            //issuer   : siapa yang memberi akses
                "aud" => $loginInfo->email,     //audiance : akses diberikan kepada siapa
                "iat" => time(),                //issue at : kapan diberikan akses
                "nbf" => time(),                //not befor : kapan digunakan akses tersebut
                "exp" => time() + 20,          //expired : sampai kapan diberikan akses
                "data" => array(
                    "username"  => $loginInfo->username,
                    "fistname"  => $loginInfo->fistname,
                    "lastname"  => $loginInfo->lastname,
                    "email"     => $loginInfo->email
                )
            );

            $token = JWT::encode($payload, Services::getPrivateKey());

            $output = [
                "status" => 200,
                "massage" => "Login Authorizer",
                "token" => $token
            ];

            return $this->response->setStatusCode(200)->setJSON($output);
        }
        $output = [
            "status" => 401,
            "massage" => "unauthorizer"
        ];

        return $this->response->setStatusCode(401)->setJSON($output);
    }
}
