<?php

namespace BlogBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * StudentUser
 *
 * @ORM\Table(name="student_user")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\StudentUserRepository")
 */
class StudentUser extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


}

