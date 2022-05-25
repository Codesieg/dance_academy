<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request): Response
    {
        $routeName = $request->attributes->get('_route');
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'routeName' => $routeName,
        ]);
    }
    /**
     * @Route("/actus", name="actus")
     */
    public function actus(): Response
    {
        return $this->render('main/actus.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('main/portfolio.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/events", name="events")
     */
    public function events(): Response
    {
        return $this->render('main/events.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
