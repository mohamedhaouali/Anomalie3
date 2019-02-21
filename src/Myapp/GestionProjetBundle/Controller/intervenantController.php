<?php

namespace Myapp\GestionProjetBundle\Controller;

use Myapp\GestionProjetBundle\Entity\intervenant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Myapp\GestionProjetBundle\Form\intervenantType;



/**
 * Intervenant controller.
 *
 */
class intervenantController extends Controller
{
    /**
     * Lists all intervenant entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $intervenants = $em->getRepository('GestionProjetBundle:intervenant')->findAll();

        return $this->render('intervenant/index.html.twig', array(
            'intervenants' => $intervenants,
        ));
    }

    /**
     * Creates a new intervenant entity.
     *
     */
    public function newAction(Request $request)
    {
        $intervenant = new Intervenant();
        $form = $this->createForm('Myapp\GestionProjetBundle\Form\intervenantType', $intervenant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($intervenant);
            $em->flush();

            return $this->redirectToRoute('intervenant_modifier', array('id' => $intervenant->getId()));
        }

        return $this->render('intervenant/new.html.twig', array(
            'intervenant' => $intervenant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a intervenant entity.
     *
     */
    public function showAction(intervenant $intervenant)
    {
        $deleteForm = $this->createDeleteForm($intervenant);

        return $this->render('intervenant/show.html.twig', array(
            'intervenant' => $intervenant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing intervenant entity.
     *
     */
    public function editAction(Request $request, intervenant $intervenant)
    {
        $deleteForm = $this->createDeleteForm($intervenant);
        $editForm = $this->createForm('Myapp\GestionProjetBundle\Form\intervenantType', $intervenant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('intervenant_edit', array('id' => $intervenant->getId()));
        }

        return $this->render('intervenant/edit.html.twig', array(
            'intervenant' => $intervenant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a intervenant entity.
     *
     */
    public function deleteAction(Request $request, intervenant $intervenant)
    {
        $form = $this->createDeleteForm($intervenant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($intervenant);
            $em->flush();
        }

        return $this->redirectToRoute('intervenant_index');
    }

    /**
     * Creates a form to delete a intervenant entity.
     *
     * @param intervenant $intervenant The intervenant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(intervenant $intervenant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('intervenant_delete', array('id' => $intervenant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
    
           public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $intervenants = $em->getRepository('GestionProjetBundle:intervenant')->findAll();

        return $this->render('intervenant/modifier.html.twig', array(
                    'intervenants' => $intervenants,
        ));
    }
   
}
