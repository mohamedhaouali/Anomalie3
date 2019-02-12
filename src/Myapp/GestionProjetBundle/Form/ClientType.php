<?php

namespace Myapp\GestionProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ClientType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', TextType::class, array('required' => true, 'attr' => array('placeholder' => 'nom client')))
                ->add('titre', TextType::class, array('required' => true, 'attr' => array('placeholder' => 'Titre Produit')))
                ->add('description', TextareaType::class, array('required' => true, 'attr' => array('placeholder' => 'Description')))
                ->add('titre1', EntityType::class, array(
                    //query choices from this entity
                    'class' => 'GestionProjetBundle:Application',
                    //use the User.username property as the visible option string
                    'choice_label' => 'titre1',
                    'multiple' => false, 'required' => TRUE
                        )
                )
                ->add('nom1', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:Module',
                    // use the User.username property as the visible option string
                    'choice_label' => 'nom1',
                    'multiple' => false, 'required' => TRUE
                        )
                )
        ;
        ;
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\GestionProjetBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'myapp_gestionprojetbundle_client';
    }

}
