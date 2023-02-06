<?php

namespace App\Controller\Admin;

use App\Entity\Gérant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;

class GérantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gérant::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
        ];
    }
}
