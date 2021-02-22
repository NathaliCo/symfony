<?php

namespace ProductoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('claveProducto', TextType::class, ['attr'  => ['class' => 'frm-control', 'label' => 'Clave de producto']])
        ->add('nombre', TextType::class, ['attr'  =>['class' => 'frm-control','label' => 'Nombre']])
        ->add('precio', NumberType::class, ['attr'  =>['class' => 'frm-control','label' => 'Precio', 'oninvalid'=>"setCustomValidity('Would you please enter a valid email?')"]]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProductoBundle\Entity\Producto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'productobundle_producto';
    }


}
