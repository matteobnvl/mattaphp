<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        //return $this->twig->render('home/index.html.twig', ['users' => $users]);
        return $this->twig->render('home/index.html.twig', []);
    }

    public function apiExemple()
    {
        // Exemple de route API REST
        $data = [
            'message' => 'Ceci est un retour en json pour réaliser une api'
        ];
        return jsonResponse(self::HTTP_RESPONSE_200, $data);
    }
}