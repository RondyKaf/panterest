<?php

use App\Entity\Pin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TinType extends AbstractType{
    public function buildForm(FormBuilderInterface $bluider,array $option){
        $bluider
            ->add('title')
            ->add('description')
        ;
    }
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefault(
            'data'=> Pin::class;
        );
    }
}