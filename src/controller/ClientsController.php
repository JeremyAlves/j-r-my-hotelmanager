<?php

namespace App\Controller;

class ClientsController extends AbstractController {

    /**
     * Afficher les clients
     * Route: GET /clients/
     */
    public function index() {
        // 1. Récupérer les clients
        $clients = $this->container->getClientManager()->findAll();

        //2. Afficher les client
        echo $this->container->getTwig()->render('clients/index.html.twig', [
            'clients' => $clients
        ]);
    }

        /**
     * Afficher la page de 1 client
     * Route: GET /cars/:id
     */
    public function show(int $id) {
        // 1. Récupérer le client par son id
        $client = $this->container->getClientManager()->findOneById($id);

        //2. Afficher le car
        echo $this->container->getTwig()->render('clients/show.html.twig', [
            'client' => $client
        ]);
    }

    /**
     * Affichage du formulaire de création
     * GET /clients/new
     */
    public function new() {
        echo $this->container->getTwig()->render('clients/form.html.twig');
    }

    /**
     * Traitement du formulaire de création puis redirection vers l'index des clients
     * POST /clients/new
     */
    public function create() {
        $this->container->getClientManager()->create($_POST);
        header('Location: ' . $this->configuration['env']['cli'] );
    }

        /**
     * Affichage du formulaire d'édition
     * GET /users/new
     */
    public function edit(int $id)
    {
        $client = $this->container->getClientManager()->findOneById($id);

        echo $this->container->getTwig()->render('clients/form.html.twig', ['client' => $client]);
    }

    /**
     * Traitement du formulaire d'édition puis redirection vers l'index des clients
     * POST /clients/new
     */
    public function update(int $id)
    {
        $this->container->getClientManager()->update($id, $_POST);
        header('Location: ' . $this->configuration['env']['cli'] );
    }

    /**
     * Suppression d'un client
     * GET /clients/:id/delete
     */
    public function delete(int $id) {
        
        $this->container->getClientManager()->delete($id);
        $this->index();
    }

}