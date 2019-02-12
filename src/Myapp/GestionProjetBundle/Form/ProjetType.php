<?php

namespace Myapp\GestionProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProjetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('titre', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Titre Projet')))
                ->add('descriprtion',TextareaType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Description')))
                ->add('etat')
                  ->add('nom', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:Client',
                    // use the User.username property as the visible option string
                    'choice_label' => 'nom',
                    'multiple' => false, 'required' => TRUE
                        )
                );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\GestionProjetBundle\Entity\Projet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_gestionprojetbundle_projet';
    }


}
