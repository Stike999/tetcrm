<?php
 
namespace Adit\Bundle\ProjectBundle\Form\Type;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'naziv',
                'text',
                [
                    'required' => true,
                    'label'    => 'adit_simple.project.naziv.label'
                ]
            );
    }
 
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class'        => 'Adit\Bundle\ProjectBundle\Entity\Project',
            ]
        );
    }
 
    /**
     * @return string
     */
    public function getName()
    {
        return 'adit_project_form';
    }
}