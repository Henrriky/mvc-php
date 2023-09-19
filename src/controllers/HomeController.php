<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $posts = [
            ['titulo' => 'Titulo de teste 1', 'corpo' => 'corpo de teste 1'],
            ['titulo' => 'Titulo de teste 2', 'corpo' => 'corpo de teste 2'],
            ['titulo' => 'Titulo de teste 3', 'corpo' => 'corpo de teste 3'],
            ['titulo' => 'Titulo de teste 4', 'corpo' => 'corpo de teste 4'],
            ['titulo' => 'Titulo de teste 5', 'corpo' => 'corpo de teste 5'],
        ];

        $this->render('home', [
            'nome' => 'Henrriky',
            'idade' => 20,
            'posts' => $posts
        ]);
    }
}