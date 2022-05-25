<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function index(Request $request): Response
    {
        $routeName = $request->attributes->get('_route');
        
        return $this->render('gallery/single.html.twig', [
            'controller_name' => 'GalleryController',
            'routeName' => $routeName,
        ]);
    }
}
