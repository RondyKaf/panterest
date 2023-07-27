<?php


use App\Entity\Pin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PinType extends AbstractType{
    public function buildForm(FormBuilderInterface $bluider,array $option){
        $bluider
            ->add('title')
            ->add('description')
        ;
    }
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(
            ['data_class'=> Pin::class]
        );
    }
}