<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 31.01.2017
 * Time: 19:17
 */

namespace PostsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PostsBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        /** @var User $user1 */
        $user1 = $this->container->get('fos_user.user_manager')->createUser();
        $user1->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));
        $user1->setEmail('example@kek.com');
        $user1->setUsername('test1');
        $user1->setPlainPassword('1234');
        $user1->setEnabled(true);
        $user1->setRoles(['ROLE_USER']);
        /*$user = new User();
        $user->setUsername('test1');
        $user->setPassword('1234');
        $user->addRole('ROLE_USER');
        $user->setEmail('example@kek.com');
        $user->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));*/

        $manager->persist($user1);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}