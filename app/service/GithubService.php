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

    public function __construct() {
        $this->token = env('GITHUB_TOKEN');
    }

    public function obtainrepos() {


    }

//        $mygithubrepos=[
//            'repos1'=>'asd',
//            'repos2'=>'qwerty',
//            'repos3'=>'asdf'
//       ];
}