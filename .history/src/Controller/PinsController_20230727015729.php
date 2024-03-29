<?php

namespace App\Controller;

use App\Repository\PinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PinRepository $pinRepository): Response
    {
        $pins = $pinRepository->findAll(); 
        return $this->render('pins/index.html.twig',compact('pins'));
    }

    #[Route('/pin:{id}', name: 'app_pin_show')]
    public function show(PinRepository $pinRepository): Response
    {
        $pins = $pinRepository->findAll(); 
        return $this->render('pins/index.html.twig',compact('pins'));
    }
}
