<?php

namespace Myapp\GestionProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DemandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre',TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Titre Projet')))
                ->add('description',TextareaType::class,array('required'=>true,'attr'=> array('placeholder'=>'Description')))
                ->add('etat')
                 ->add('nom4', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:intervenant',
                    // use the User.username property as the visible option string
                    'choice_label' => 'nom4',
                    'multiple' => false,'expanded' => false // options will be presented in a <select> element; set this to true, to present the data as checkboxes
                    
                       
                        )
        )
                
                   ->add('nom', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:client',
                    // use the User.username property as the visible option string
                    'choice_label' => 'nom',
                    'multiple' => false,'expanded' => false // options will be presented in a <select> element; set this to true, to present the data as checkboxes
                    
                       
                        )
        ) 
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
                
                
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\GestionProjetBundle\Entity\Demande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_gestionprojetbundle_demande';
    }


}
