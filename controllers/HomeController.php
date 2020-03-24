<?php

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $data = ['titulo' => 'Home'];
        $this->view('home', $data);
    }
}
