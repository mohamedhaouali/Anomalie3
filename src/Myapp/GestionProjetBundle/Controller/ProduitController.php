<?php

namespace Myapp\GestionProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function produitAction()
    {
        return $this->render('GestionProjetBundle:Default:produits/layout/produits.html.twig');
    }
    
      public function presentationAction()
    {
        return $this->render('GestionProjetBundle:Default:produits/layout/presentation.html.twig');
    }
    
   
}
