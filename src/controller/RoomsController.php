<?php

namespace App\Controller;

class RoomsController extends AbstractController {

    /**
     * Afficher les rooms
     * Route: GET /rooms/
     */
    public function index() {
        // 1. Récupérer les rooms
        $rooms = $this->container->getRoomManager()->findAll();
        //2. Afficher les rooms
        echo $this->container->getTwig()->render('pages/index.html.twig', [
            'rooms' => $rooms
        ]);
    }

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id) {
        // 1. Récupérer la room par son id
        $room = $this->container->getRoomManager()->findOneById($id);
        $clients = $this->container->getClientManager()->findAll($id);

        //2. Afficher la room
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room,
            'clients' => $clients,
        ]);
    }

    /**
     * Affichage du formulaire de création
     * GET /room/new
     */
    public function new() {
        echo $this->container->getTwig()->render('rooms/form.html.twig');
    }

    /**
     * Traitement du formulaire de création puis redirection vers l'index des cars
     * POST /rooms/new
     */
    public function create() {
        $this->container->getRoomManager()->create($_POST);
        header('Location: ' . $this->configuration['env']['base_path'] );
    }

        /**
     * Affichage du formulaire d'édition
     * GET /rooms/new
     */
    public function edit(int $id)
    {
        $room = $this->container->getRoomManager()->findOneById($id);

        echo $this->container->getTwig()->render('rooms/form.html.twig', ['room' => $room]);
    }

    /**
     * Traitement du formulaire d'édition puis redirection vers l'index des rooms
     * POST /rooms/new
     */
    public function update(int $id)
    {
        $this->container->getRoomManager()->update($id, $_POST);
        $this->show($id);
    }

    /**
     * Suppression d'une room
     * GET /rooms/:id/delete
     */
    public function delete(int $id) {
        
        $this->container->getRoomManager()->delete($id);
        $this->index();
    }

}