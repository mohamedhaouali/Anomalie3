<?php

namespace Myapp\GestionProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ApplicationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->
                add('titre1', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Titre Application')))
                ->add('description',TextareaType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Description')))
                
                ->add('nom1', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:Module',
                    // use the User.username property as the visible option string
                    'choice_label' => 'nom1',
                    'multiple' => false,'expanded' => false // options will be presented in a <select> element; set this to true, to present the data as checkboxes
                    
                       
                        )
        )
                ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\GestionProjetBundle\Entity\Application'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_gestionprojetbundle_application';
    }


}
