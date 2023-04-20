<?php

class Pages extends Controller// Extends Controller class
{ 
    public function __construct() {
        // $this->model('Pages');
      }

    public function index() {
        $data = [
            'title' => 'Je suis la page 127.0.0.1'
        ];

        $this->view('index', $data); // Path: Vue\index.php
    }
}
