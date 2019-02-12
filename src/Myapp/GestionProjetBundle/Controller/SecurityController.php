<?php

namespace Myapp\GestionProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;





class SecurityController extends Controller
{
    public function redirectAction(Request $request)
    {
        $authCheker=$this->container->get($id,'security.authorization_checker');
        if($authCheker->isGranted('ROLE_Admin')) {
            
            return $this->render('GestionProjetBundle:Default:Security/admin_home.html.twig');
            
        } else if ($authCheker->isGranted('ROLE_USER'))
            
        {
          return $this->render('GestionProjetBundle:Default:Security/user_home.html.twig');   
        }else 
        {
        
         return $this->render('@FOSUser/Security/login_content.html.twig');
        
      
        }
    
  
    
  
    
        
    }
    

}