<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 26.12.2016
 * Time: 22:28
 */

namespace PostsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PostsBundle\Entity\Comment;

class LoadCommentData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        $comment->setTitle("Сем виды Кедр пал речи ");
        $comment->setText("ак Мощь луга дуб льва. Чья Вот Сей еще. 
        Определил вздрогнет Вселенной двигнутся уподобить. . 
        Жива По стад стук ль Ко Во Не Се но. Муж Отч пал мню сам имя Злы. 
        Шум зрю привесть дни предложу искренню Жив Дум. Ад От та Ее Со во те. 
        Тя Уж зрим из уж ли Всяк Не Но трех. Ум яйцом Прочь верой живую славу Тя ИЗ яр ты. ");
        $comment->setPost($manager->merge($this->getReference('post-0')));
        $manager->persist($comment);

        $comment1 = new Comment();
        $comment1->setTitle("A.u.e");
        $comment1->setText("Fartu masti, vorovskogo hodu!");
        $comment1->setPost($manager->merge($this->getReference('post-2')));
        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setTitle("Нoooooo");
        $comment2->setText("Abra kadabra syaski masyaski");
        $comment2->setPost($manager->merge($this->getReference('post-0')));
        $manager->persist($comment2);

        $comment3 = new Comment();
        $comment3->setTitle("GOVNO");
        $comment3->setText("Che za huitu ya prochital");
        $comment3->setPost($manager->merge($this->getReference('post-1')));
        $manager->persist($comment3);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }
}