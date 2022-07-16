<?php

namespace App\Controller;

use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    #[Route('/catalog/{id}', name: 'app_catalog_rest')]
    public function restCatalog(RestaurantRepository $repository, int $id): Response
    {
        $restaurant = $repository->find($id);

        if (empty($restaurant)) {
            $this->createNotFoundException();
        }

        $dishes = $restaurant->getDishes();

    }

    #[Route('/catalog/', name: 'app_catalog')]
    public function catalog(RestaurantRepository $repository, int $id): Response
    {
        $restaurant = $repository->find($id);

        if (empty($restaurant)) {
            $this->createNotFoundException();
        }

        $dishes = $restaurant->getDishes();
        dd($dishes);
    }
}
