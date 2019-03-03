<?php

namespace Remmy\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Remmy\BackOfficeBundle\Entity\Product;
use Remmy\BackOfficeBundle\Entity\Color;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('data_class' => null))
                ->add('description', TextType::class, array('data_class' => null))
                ->add('image', FileType::class, array('data_class' => null), ['label' => 'image (jpeg,jpg or png file)'])
                ->add('price', TextType::class, array('data_class' => null));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Remmy\BackOfficeBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'remmy_backofficebundle_product';
    }


}
