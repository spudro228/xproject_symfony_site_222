<?php
/**
 * Created by PhpStorm.
 * User: spudro
 * Date: 04.05.17
 * Time: 21:31
 */

namespace PostsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PostsBundle\Entity\Subject;

class LoadSubjectData extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $subj1 = new Subject();
        $subj1->setSubjName("shared");

        $subj2 = new Subject();
        $subj2->setSubjName('other');

        $manager->persist($subj1);
        $manager->persist($subj2);

        $manager->flush();
        $this->addReference('subj-0', $subj1);
        $this->addReference('subj-1', $subj2);

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