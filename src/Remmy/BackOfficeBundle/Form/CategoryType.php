<?php

namespace Remmy\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Remmy\BackOfficeBundle\Entity\Category;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('categorycategory', TextType::class, array('data_class' => null))
                ->add('name', TextType::class, array('data_class' => null));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Remmy\BackOfficeBundle\Entity\Category'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'remmy_backofficebundle_category';
    }


}
