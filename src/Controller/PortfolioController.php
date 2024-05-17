<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PortfolioController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/projects', name: 'app_projects')]
    public function projects(): Response
    {
        return $this->render('/projects.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/aboutme', name: 'app_aboutme')]
    public function aboutme(): Response
    {
        return $this->render('/aboutme.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('/contact.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}


/*
#[Route('/index', name: 'app_index')]
public function index(): Response
{
    return $this->render('/index.html.twig', [
        'controller_name' => 'PortfolioController',
    ]);
}

#[Route('/projects', name: 'app_projects')]
public function projects(): Response
{
    return $this->render('/projects.html.twig', [
        'controller_name' => 'PortfolioController',
    ]);
}

#[Route('/playlist', name: 'app_playlist')]
public function playlist(): Response
{
    return $this->render('/playlist.html.twig', [
        'controller_name' => 'PortfolioController',
    ]);
}

#[Route('/aboutme', name: 'app_aboutme')]
public function aboutme(): Response
{
    return $this->render('/aboutme.html.twig', [
        'controller_name' => 'PortfolioController',
    ]);
}

#[Route('/contact', name: 'app_contact')]
public function contact(): Response
{
    return $this->render('/contact.html.twig', [
        'controller_name' => 'PortfolioController',
    ]);
}
*/