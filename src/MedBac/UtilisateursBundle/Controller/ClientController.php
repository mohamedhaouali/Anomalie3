<?php

namespace MedBac\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function indexAction()
    {
 
        
         return $this->render('UtilisateursBundle:Client:index.html.twig');
        
    }
}
