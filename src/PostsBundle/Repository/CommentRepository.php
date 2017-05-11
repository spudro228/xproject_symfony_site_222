<?php

namespace PostsBundle\Repository;

use PostsBundle\Entity\Post;

/**
 * CommentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Все комменты поста.
     *
     * @param $postId
     * @return \Doctrine\ORM\Query
     */
    public function getCommentsForPost($postId)
    {
        $qb = $this->createQueryBuilder('c')->select('c')
            ->where('c.post = :post_id')
            ->addOrderBy('c.createAt')
            ->setParameter('post_id', $postId);


        return $qb->getQuery();
    }

    public function getCommentsCount(Post $post)
    {
        $qb = $this->createQueryBuilder('c')->select('COUNT(c)')
            ->where('c.post = :post_id')
            ->setParameter('post_id', $post->getId());

        return $qb->getQuery();
    }

}
