<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 26.12.2016
 * Time: 22:20
 */

namespace PostsBundle\DataFixtures\ORM;

//namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PostsBundle\Entity\Post;
use PostsBundle\Entity\Subject;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {

        $post1 = new Post();
        $post1->setSubject($this->getReference('subj-0'));
        $post1->setTitle("Some title 2");
        $post1->setAuthor("anonimous");
        $post1->setText("Сан сих Ему дам нем уха. Не ты их Их ль. Соловья грешных болотна Владыка сильней поспеши. 
        Пой Арф кое нег меж ﻿Кто Дол. Поблек моя Меч Пускай без чаю лжи всё мольбе поя очи. Же То Вы Уж Тя ﻿Кто Мы. 
        Милостивым изобразуют Они уже Ним преступных сии. ");

        $post2 = new Post();
        $post2->setSubject($this->getReference('subj-0'));
        $post2->setTitle("Wow!");
        $post2->setAuthor("anonimous");
        $post2->setText("Виновником совоздыхая потряслися устройство Правосудие. 
        Ст ум ﻿Кто Ея Уж До. Крестном ея приносит Те ГОЛИЦЫНА Во ИЗ. Те Он За На их. . Сия при Где Дни Кто Дуб вес.
        Моя ран бессмертие Кои Бел огнекрылый препятства Вознесутся Несчастьем одр Зло плащаницей сад. Гул яры одр вес. 
        ");

        $post3 = new Post();
        $post3->setSubject($this->getReference('subj-1'));
        $post3->setTitle("Some title");
        $post3->setAuthor("anonimous");
        $post3->setText("Мая пор зря сии одр Наш. 
        Те предерзкий бестелесна Всевышнему По ль Искупитель восхищеньи воздыханьи Уж.
        Чей Вам зла Что зрю. Ко Вы Но Те об. Смиреньем сохраняют дальность вскликнул колебался пламенном.");

        $manager->persist($post1);
        $manager->persist($post2);
        $manager->persist($post3);

        $manager->flush();

        $this->addReference("post-0", $post1);
        $this->addReference("post-1", $post2);
        $this->addReference("post-2", $post3);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public
    function getOrder()
    {
        return 2;
    }
}