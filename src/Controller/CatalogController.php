<?php

namespace App\Controller;

use App\Enums\CommonStatuses;
use App\Repository\CategoryRepository;
use App\Repository\DishRepository;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/catalog/{id}', name: 'app_catalog_rest')]
    public function restCatalog(DishRepository $dishR, int $id): Response
    {
        $dishes = $dishR->getByRestaurantActive($id);

        return $this->render('catalog/index.html.twig', [
            'dishes' => $dishes
        ]);
    }

    #[Route('/categories/', name: 'app_catalog')]
    public function catalog(CategoryRepository $catR): Response
    {
        $categories = $catR->findBy([
            'status' => CommonStatuses::ACTIVE
        ]);

        return $this->render('catalog/categories.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/catalog/category/{category_id}', name: 'app_category_dishes')]
    public function catalogDishes(DishRepository $dishR, int $category_id): Response
    {
        $dishes = $dishR->getByCategory($category_id);

        return $this->render('catalog/index.html.twig', [
            'dishes' => $dishes
        ]);
    }
}
