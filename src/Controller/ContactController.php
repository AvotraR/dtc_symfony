<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact/', name: 'app_contact', methods:['POST','GET','DELETE'])]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig');
    }
}
