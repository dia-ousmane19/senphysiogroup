<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextArea;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom',TextType::class,[
          'attr'=>['placeholder'=>'Votre nom'],
          'label'=>false
      ])
        ->add('email',EmailType::class,[
          'attr'=>['placeholder'=>'Votre Email'],
          'label'=>false
      ])
        ->add('message',TextareaType::class,[
          'attr'=>['placeholder'=>'Votre message'],
          'label'=>false
      ])
        ->add('envoyer',SubmitType::class,[
          'attr'=>['class'=>'btn btn-danger btn-block mb-1']
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
