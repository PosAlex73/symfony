<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Dish;
use App\Entity\Order;
use App\Entity\Page;
use App\Entity\Restaurant;
use App\Entity\RestaurantReview;
use App\Entity\User;
use App\Entity\UserProfile;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
         return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('FyooJo');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('Users');
        yield MenuItem::linkToCrud('Users', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('UserProfiles', 'fas fa-list', UserProfile::class);
        yield MenuItem::section('Orders');
        yield MenuItem::linkToCrud('Orders','fas fa-list', Order::class);
        yield MenuItem::linkToCrud('Categories','fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Pages','fas fa-list', Page::class);
        yield MenuItem::section('Restaurants');
        yield MenuItem::linkToCrud('Restaurants','fas fa-list', Restaurant::class);
        yield MenuItem::linkToCrud('Reviews','fas fa-list', RestaurantReview::class);
        yield MenuItem::linkToCrud('Dishes','fas fa-list', Dish::class);
    }
}
