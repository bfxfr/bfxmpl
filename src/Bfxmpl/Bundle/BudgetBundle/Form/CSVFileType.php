<?php

namespace Bfxmpl\Bundle\BudgetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CSVFileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file')
            ->add('updated');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bfxmpl\Bundle\BudgetBundle\Entity\CSVFile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bfxmpl_bundle_budgetbundle_csvfile';
    }
}
