<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\DishRepository;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(DishRepository $dishR, CategoryRepository $catR, RestaurantRepository $resR): Response
    {
        $dishes = $dishR->getForIndex();
        $categories = $catR->getForIndex();
        $restaurants = $resR->getForIndex();

        return $this->render('index/index.html.twig', [
            'dishes' => $dishes,
            'categories' => $categories,
            'restaurants' => $restaurants
        ]);
    }
}
