<?php

namespace App\DataFixtures;

use App\Entity\Address;
use App\Entity\Category;
use App\Entity\Dish;
use App\Entity\Page;
use App\Entity\Restaurant;
use App\Entity\RestaurantReview;
use App\Entity\User;
use App\Entity\UserProfile;
use App\Enums\CommonStatuses;
use App\Enums\User\UserStatuses;
use App\Enums\User\UserTypes;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFix extends Fixture
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->hasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $f = Factory::create();
        $admin = new User();
        $admin->setFirstname($f->firstName());
        $admin->setLastname($f->lastName());
        $admin->setEmail('admin@admin.ru');
        $admin->setStatus(UserStatuses::ACTIVE);
        $admin->setType(UserTypes::ADMIN);
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setUpdated(new \DateTime('now'));
        $admin->setCreated(new \DateTimeImmutable('now'));

        $pass = $this->hasher->hashPassword($admin, 'admin');
        $admin->setPassword($pass);

        $manager->persist($admin);
        $manager->flush($admin);

        $user = new User();
        $user->setFirstname($f->firstName());
        $user->setLastname($f->lastName());
        $user->setEmail('user@user.ru');
        $user->setStatus(UserStatuses::ACTIVE);
        $user->setType(UserTypes::SIMPLE);
        $user->setRoles(['ROLE_USER']);
        $user->setUpdated(new \DateTime('now'));
        $user->setCreated(new \DateTimeImmutable('now'));

        $pass = $this->hasher->hashPassword($user, 'user');
        $user->setPassword($pass);

        $manager->persist($user);
        $manager->flush($user);

        $users = [];
        foreach (range(1, 50) as $_) {
            $user = new User();
            $user->setFirstname($f->firstName());
            $user->setLastname($f->lastName());
            $user->setEmail($f->email());
            $user->setStatus(UserStatuses::ACTIVE);
            $user->setType(UserTypes::SIMPLE);
            $user->setRoles(['ROLE_USER']);
            $user->setUpdated(new \DateTime('now'));
            $user->setCreated(new \DateTimeImmutable('now'));

            $pass = $this->hasher->hashPassword($user, 'user');
            $user->setPassword($pass);
            $users[] = $user;
            $manager->persist($user);
            $manager->flush($user);
        }

        foreach ($users as $user) {
            $profile = new UserProfile();
            $profile->setEmail($f->email());
            $profile->setConsumer($user);
            $profile->setCountry($f->countryCode());
            $profile->setPhone($f->phoneNumber());


            $manager->persist($profile);
            $manager->flush($profile);
        }

        $categories = [];
        foreach (range(0, 30) as $_) {
            $category = new Category();
            $category->setStatus(CommonStatuses::ACTIVE);
            $category->setDescription($f->text(200));
            $category->setTitle($f->text(20));
            $category->setImage($f->imageUrl);
            $categories[] = $category;
            $manager->persist($category);
            $manager->flush($category);
        }

        $addrs = [];
        foreach (range(0, 50) as $_) {
            $a = new Address();
            $a->setCountry($f->countryCode());
            $a->setCity($f->city());
            $a->setStreet($f->streetName);
            $a->setBuilding($f->buildingNumber());
            $a->setOffice($f->text(5));

            $addrs[] = $a;
            $manager->persist($a);
            $manager->flush($a);
        }

        foreach (range(0, 50) as $_) {
            $r = new Restaurant();
            $r->setTitle($f->text(10));
            $r->setDescription($f->text());
            $r->setStatus(CommonStatuses::ACTIVE);
            $r->setAddress(array_pop($addrs));
            $r->setWorkTime($f->text(10));

            $manager->persist($r);
            $manager->flush($r);

            $reviewNumber = mt_rand(3, 8);

            foreach (range(0, $reviewNumber) as $_) {
                $rev = new RestaurantReview();
                $rev->setTitle($f->title());
                $rev->setRating(mt_rand(1, 5));
                shuffle($users);
                $reviewUser = reset($users);
                $rev->setReviewer($reviewUser);
                $rev->setCreated($f->dateTime());
                $rev->setStatus(CommonStatuses::ACTIVE);
                $rev->setUpdated($f->dateTime());
                $rev->setText($f->text(50));
                $rev->setRestaurant($r);
                $manager->persist($rev);
                $manager->flush($rev);
            }

            $dishNumber = mt_rand(1, 20);
            foreach (range(1, $dishNumber) as $_) {
                $d = new Dish();
                $d->setTitle($f->text(10));
                $d->setDescription($f->text());
                $d->setImage($f->imageUrl());
                $d->setPrice(mt_rand(0, 1000));
                $d->setRestaurant($r);
                $d->setStatus(CommonStatuses::ACTIVE);
                $d->setWeight(mt_rand(100, 500));

                $manager->persist($d);
                $manager->flush($d);
            }
        }

        foreach (range(0, 10) as $_) {
            $page =  new Page();
            $page->setTitle($f->text(10));
            $page->setText($f->text(1024));
            $page->setUpdated($f->dateTime());
            $page->setCreated($f->dateTime());
            $page->setStatus(CommonStatuses::ACTIVE);

            $manager->persist($page);
            $manager->flush($page);
        }
    }
}
