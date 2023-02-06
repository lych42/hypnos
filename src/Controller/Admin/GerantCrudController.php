<?php

namespace App\Controller\Admin;

use App\Entity\Gerant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;


class GerantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Gerant::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('email'),
            TextField::new('password'),
        ];
    }
}
