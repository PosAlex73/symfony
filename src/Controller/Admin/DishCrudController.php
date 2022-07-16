<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\DomCrawler\Image;

class DishCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dish::class;
    }


    public function configureFields(string $pageName): iterable
    {
        $title = TextField::new('title');
        $description = TextEditorField::new('description');
        $price = IntegerField::new('price');
        $weight = IntegerField::new('weight');
        $image = TextField::new('image');

        if ($pageName === Crud::PAGE_INDEX) {
            return [$title, $price, $weight];
        }

        if ($pageName === Crud::PAGE_EDIT || $pageName === Crud::PAGE_NEW) {
            $restaurant = AssociationField::new('restaurant')->setCrudController(RestaurantCrudController::class);

            return [$title, $price, $weight, $image, $description, $restaurant];
        }
    }
}
