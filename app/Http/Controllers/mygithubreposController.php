<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class mygithubreposController
 * @package App\Http\Controllers
 */
class mygithubreposController extends Controller {
    protected $github;


    /**
     * mygithubreposController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index () {
        $mygithubrepos=$this->github->obtainRepos();



        return view('mygithubrepos', compact($mygithubrepos));
    }
}
