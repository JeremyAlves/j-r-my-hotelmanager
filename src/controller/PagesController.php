<?php

namespace App\Controller;

class PagesController extends AbstractController {

    /**
     * Route: page d'accueil ('/')
     */
    public function index() {
        $rooms = $this->container->getRoomManager()->findAll();
        //2. Afficher les client
        echo $this->container->getTwig()->render('pages/index.html.twig', [
            'rooms' => $rooms
        ]);
    }

}