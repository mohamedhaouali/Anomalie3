<?php

namespace Myapp\GestionProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;







class SecurityController extends Controller
{
    public function redirectAction()
    {
        //verifier si l'utilsateur a un role particulier 
        $authCheker = $this->container->get($id,'security.authorization_checker');
        if($authCheker->isGranted('ROLE_Admin')) {
            
            return $this->render('GestionProjetBundle:Default:Security:admin_home.html.twig');
            
        } else if ($authCheker->isGranted('ROLE_USER'))
            
        {
          return $this->render('GestionProjetBundle:Default:Security:user_home.html.twig');   
        }else 
        {
        
         return $this->render('@FOSUser/Security/login_content.html.twig');
        
      
        }
    
  
    
  
    
        
    }
    

}