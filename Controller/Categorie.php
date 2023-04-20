<?php

class Categorie extends Controller// Extends Controller class
{ 
    public function __construct() {
        // $this->model('Categorie');
      }

    public function index() {
        $data = [
            'title' => 'je suis la page des categories',
        ];

        $this->view('categorie', $data);
    }

    public function article($url = null) {
        
        if (!is_null($url)) {
            $data = [
                'title' => 'je suis la page des articles avec la pagination',
            ];
        } else {
            $data = [
                'title' => 'je suis la page des articles',
            ];
        }



        $this->view('article', $data);
    }

}