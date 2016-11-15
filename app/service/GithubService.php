<?php


namespace App\service;
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 15/11/16
 * Time: 19:54
 */
class GithubService {
    protected $token;
    protected $guzzle;

    protected $github_api_url="https://api.github.com";

    protected $uri= '/user/repos';

    public function __construct() {
        $this->token = env('GITHUB_TOKEN');
    }

    public function obtainrepos() {
        $res= $this->guzzle->request('GET',$this->gitHubApiUrl(),

            [
                "auth"=> $this->credentials()

            ]


            );

        dd($res->getBody());



    }

    private function gitHubApiUrl() {
        return $this->github_api_url . $this->uri;
    }

    private function credentials()   {

    }


}