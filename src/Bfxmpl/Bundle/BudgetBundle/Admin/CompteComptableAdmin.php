<?php
/**
 * Created by PhpStorm.
 * User: alptis
 * Date: 03/06/14
 * Time: 10:27
 */

namespace Bfxmpl\Bundle\BudgetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CompteComptableAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('numero', 'text', array('label' => 'Numéro'))
            ->add('libelle', 'text', array('label' => 'Libellé'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('numero')
            ->add('libelle')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('numero')
            ->add('libelle')
        ;
    }
}
