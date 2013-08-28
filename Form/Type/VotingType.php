<?php

namespace Kp\Bundle\VotingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VotingType extends AbstractType
{
    protected $dataClass;
    protected $checkerRegistry;
    protected $actionRegistry;

    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('active', 'checkbox', array(
                'label' => 'kp.voting.active',
                'attr' => array('class' => 'span12'),
            ))
            ->add('voting', 'textarea', array(
                'label' => 'kp.voting.voting',
            ))
            ->add('author')
            ->add('save', 'submit', array(
                'label' => 'kp.save',
            ))
        ;

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => $this->dataClass
            ))
        ;
    }

    public function getName()
    {
        return 'kp_voting';
    }
}
