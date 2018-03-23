<?php
/**
 * Created by PhpStorm.
 * User: kris
 * Date: 24.02.18
 * Time: 18:03
 */

namespace AppBundle\Admin;

use AppBundle\Entity\BlogPost;
use AppBundle\Entity\Category;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends AbstractAdmin
{

    public $supportsPreviewMode = true;

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('ContentAAAA', ['class' => 'col-md-9'])
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->end()
            ->with('Meta data1111', ['class' => 'col-md-3'])
            ->add('category', 'sonata_type_model', [
                'class' => 'AppBundle\Entity\Category',
                'property' => 'name',
            ])
            ->end();
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('draft');
    }

    public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Posty'; // shown in the breadcrumb on the create view
    }

}