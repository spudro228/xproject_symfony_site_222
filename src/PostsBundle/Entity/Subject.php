<?php

namespace PostsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Subjects
 *
 * @ORM\Table(name="subjects")
 * @ORM\Entity(repositoryClass="PostsBundle\Repository\SubjectsRepository")
 */
class Subject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $subjName;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Post", mappedBy="subj")
     *
     */
    private $posts;


    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSubjName()
    {
        return $this->subjName;
    }

    /**
     * @param mixed $subjName
     */
    public function setSubjName($subjName)
    {
        $this->subjName = $subjName;
    }

    /**
     * Add comment
     *
     * @param Post $post
     * @return $this
     */
    public function addPosts(Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     *  Remove comment
     * @param Comment $comment
     */
    public function removePosts(Post $post)
    {
        $this->posts->removeElement($post);
    }
}

