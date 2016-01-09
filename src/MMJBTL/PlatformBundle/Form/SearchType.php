<?php

namespace MMJBTL\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
      ->add('search',      'text')
      ->add('save',      'submit')
    	;

    	$builder->addEventListener(
      	FormEvents::PRE_SET_DATA, function(FormEvent $event) {
    	$result = $event->getData();
    	if (null === $result) {
     		return;
        }});
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'message' => 'Type your message here',
        ));
    }


    public function getName()
    {
        return 'platformbundle_search';
    }
}