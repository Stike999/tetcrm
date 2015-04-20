<?php

namespace Adit\Bundle\ProjektBundle\Form\Status;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CRUDStatus extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'status',
                'text',
                [
                    'required' => true,
                    'label' => 'adit.project.crud.status.label'
                ]
            );
    }
}
