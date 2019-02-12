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

use Myapp\GestionProjetBundle\Entity\Contact;
use Myapp\GestionProjetBundle\Form\ContactType;



class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('home.html.twig');
    }
    
  
    
  
    
     public function acceuilAction()
    {
        return $this->render('GestionProjetBundle:Default:acceuil.html.twig');
    }
    
    public function AdminPageAction(Request $request)
    {
        return $this->render('admin.html.twig');
    }
    
    public function ClientPageAction(Request $request)
    {
        return $this->render('client.html.twig');
    }
    
     public function ShowInfoAction(Request $request)
    {
        return $this->render('login_success.html.twig');
    }
    
    public function showUserAction(Request $request) {
        
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
           
            return $this->render('admin.html.twig');
            
        }
        
        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
           
            return $this->render('client.html.twig');
            
        }
        
        }
        
       public function DetermineuserAction(Request $request)
    {
        return $this->render('user.html.twig');
    }   
     
    
    public function swiftmailetAction(Request $request)
            
    {
        
        $message = \Swift_Message::newInstance()
            ->setSubject('Subject')
            ->setFrom(array('mohamed.haouali1@gmail.com' => 'med'))
            ->setTo(array($user->getMail()))
            ->setBcc(array('copy1@example.com', 'copy2@example.com'))
            ->setBody(
                $this->renderView(
                    'template.html.twig',
                    array('vars' => $vars)
                ),
                'text/html'
            );

$this->get('mailer')->send($message);
    }
    
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $subject = $form->get('objet')->getData();
            $email = $form->get('email')->getData();
            $message = $form->get('sujet')->getData();
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                $mess = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($this->getParameter('mailer_user'))
                    ->setTo('mohamed.haouali1@gmail.com')
                    ->setReplyTo($email)
                    ->setBody($message);
                $this->get('mailer')->send($mess);
                return $this->redirect($this->generateUrl('myapplication_contact'));
            }
        }
        return $this->render('GestionProjetBundle:Default:contact.html.twig', array('form' => $form->createView()));
    }  
    
        
    }
    

