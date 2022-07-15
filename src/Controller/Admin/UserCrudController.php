<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\UserProfile;
use App\Enums\User\UserTypes;
use App\Repository\UserProfileRepository;
use Doctrine\Bundle\DoctrineBundle\Registry;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use SebastianBergmann\CodeCoverage\Report\Text;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Component\Validator\Constraints\Choice;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->renderContentMaximized();
    }

    public function configureFields(string $pageName): iterable
    {
        $id = IdField::new('id');
        $email = EmailField::new('email');
        $roles = ChoiceField::new('roles')
            ->allowMultipleChoices()
            ->setChoices([
                'Admin' => 'ROLE_ADMIN',
                'User' => 'ROLE_USER'
            ]);
        $type = ChoiceField::new('type')
            ->setChoices(UserTypes::getAll());
        $firstname = TextField::new('firstname');
        $lastname = TextField::new('lastname');

        /** @var Registry $entityManager */
        $entityManager = $this->container->get('doctrine');

        /** @var UserProfileRepository $repo */
        $repo = $entityManager->getRepository(UserProfile::class);
        $profile = AssociationField::new('userProfile')->setQueryBuilder(fn() => $repo->findAll());

        if ($pageName === Crud::PAGE_INDEX) {
            return [$id, $email, $firstname, $lastname, $type];
        } else {
            return [$id, $email, $firstname, $lastname, $type, $roles, $profile];
        }
    }
}
