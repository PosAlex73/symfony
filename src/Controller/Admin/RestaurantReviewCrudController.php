<?php

namespace App\Controller\Admin;

use App\Entity\RestaurantReview;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RestaurantReviewCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RestaurantReview::class;
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
