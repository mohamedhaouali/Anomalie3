<?php

namespace MedBac\UtilisateursBundle\EventListenner;

use FOS\UserBundle\FOSUserEvents;

use FOS\UserBundle\Event\FormEvent;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RegistrationListenner implements EventSubscriberInterface


{
    public static function  getSubscribedEvents()
            
    {
       return array(FOSUserEvents::REGISTRATION_SUCCESS=>'onRegistrationSuccess'); 
    }


   public function onRegistrationSuccess (FormEvent $event)
   {
           
           $roles = array ('ROLE_BIDON');
   
            $user = $event->getForm()->getData(); 
                    
            $user->setRoles($roles);       


}

}