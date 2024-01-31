<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setFirstname('Admin');
        $user->setLastname('Admin');
        $user->setEmail('admin@example.com');
        $user->setRoles([User::ROLE_ADMIN]);

        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'admin'
        ));

        $manager->persist($user);
        $manager->flush();

        for ($i = 0; $i < 5; $i++) {
            $category = new Category();
            $category->setName('Category ' . $i);
            $manager->persist($category);

            for ($j = 0; $j < 10; $j++) {
                $article = new Article();
                $article->setTitle('Article ' . $j);
                $article->setCreatedAt(new \DateTime());
                $article->setUpdatedAt(new \DateTime());
                $article->setDescription('Description ' . $j);
                $article->setContent('Content ' . $j);
                $article->setCategory($category);
                $article->setAuthor($user);
                $manager->persist($article);
            }
        }

        $manager->flush();
    }
}
