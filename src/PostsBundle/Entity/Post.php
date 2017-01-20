<?php

namespace PostsBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="PostsBundle\Repository\PostRepository")
 */
class Post
{

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        /*$metadata->addPropertyConstraint('title', new Assert\Length([
                'min' => 0,
                'max' => 50,
                'maxMessage' => 'Your title cannot be longer than 50 characters.'
            ]
        ));*/

        /*$metadata->addPropertyConstraints('title', [
            new Assert\Blank(),
            new Assert\Length([
                'max' => 50,
                'maxMessage' => 'Your title cannot be longer than 50 characters.'
            ])
        ]);*/
        $metadata->addPropertyConstraints('text', [
            new Assert\NotBlank(),
            new Assert\Length([
                'max' => 1500,
                'maxMessage' => 'Your text message cannot be longer than 1500 characters.'
            ])
        ]);
    }

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
     * @ORM\Column(type="text", nullable=true)
     */
    private $title = null;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(type="text", length=100)
     */
    private $author = 'anonymous';

    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    private $createAt;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="post")
     */
    private $comments;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->setCreateAt(new \DateTime());
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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * @param string $createAt
     * @return $this
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Add comment
     *
     * @param Comment $comment
     * @return Post
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     *  Remove comment
     * @param Comment $comment
     */
    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     *
     */
    public function __toString()
    {
        return (string)$this->getId();
    }


}

