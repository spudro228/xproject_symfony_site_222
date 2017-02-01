<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 26.12.2016
 * Time: 22:20
 */

namespace PostsBundle\DataFixtures\ORM;

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PostsBundle\Entity\Post;

class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->setTitle("Some title");
        $post->setAuthor("anonimous");
        $post->setText("Мая пор зря сии одр Наш. 
        Те предерзкий бестелесна Всевышнему По ль Искупитель восхищеньи воздыханьи Уж.
        Чей Вам зла Что зрю. Ко Вы Но Те об. Смиреньем сохраняют дальность вскликнул колебался пламенном.");
        $manager->persist($post);

        $post1 = new Post();
        $post1->setTitle("Some title 2");
        $post1->setAuthor("anonimous");
        $post1->setText("Сан сих Ему дам нем уха. Не ты их Их ль. Соловья грешных болотна Владыка сильней поспеши. 
        Пой Арф кое нег меж ﻿Кто Дол. Поблек моя Меч Пускай без чаю лжи всё мольбе поя очи. Же То Вы Уж Тя ﻿Кто Мы. 
        Милостивым изобразуют Они уже Ним преступных сии. ");
        $manager->persist($post1);

        $post2 = new Post();
        $post2->setTitle("Wow!");
        $post2->setAuthor("anonimous");
        $post2->setText("Виновником совоздыхая потряслися устройство Правосудие. 
        Ст ум ﻿Кто Ея Уж До. Крестном ея приносит Те ГОЛИЦЫНА Во ИЗ. Те Он За На их. . Сия при Где Дни Кто Дуб вес.
        Моя ран бессмертие Кои Бел огнекрылый препятства Вознесутся Несчастьем одр Зло плащаницей сад. Гул яры одр вес. 
        ");
        $manager->persist($post2);

        $manager->flush();

        $this->addReference("post-0", $post);
        $this->addReference("post-1", $post1);
        $this->addReference("post-2", $post2);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}