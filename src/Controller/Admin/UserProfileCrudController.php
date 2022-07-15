<?php

namespace App\Controller\Admin;

use App\Entity\UserProfile;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserProfileCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UserProfile::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
