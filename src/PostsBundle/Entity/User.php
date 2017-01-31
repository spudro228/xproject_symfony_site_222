<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 25.01.2017
 * Time: 04:23
 */

namespace PostsBundle\Entity;

use \FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    //protected $username;

    /**
     * @ORM\Column(text="string", length=64)
     */
    //protected $password;

    /**
     * @ORM\Column(type="text", length=60, unique=true)
     */
    //protected $email;

    //todo: добавить . Активация аккаунта по почте
    /**
     * ORM\Column(name="is_active", type="boolean")
     */
    //private $isActive;

    //protected $roles;

    public function __construct()
    {
        parent::__construct();
    }
}