<?php

namespace App\Entities;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class User
 * @package App\Entities
 *
 * @ODM\Document()
 */
class User
{
    /**
     * @var string|null
     *
     * @ODM\Id()
     */
    private $id;

    /**
     * @var string
     *
     * @ODM\Field(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ODM\Field(type="string")
     */
    private $email;

    /**
     * @var BlogPost[]
     *
     * @ODM\ReferenceMany(targetDocument=BlogPost::class, cascade="all")
     */
    private $posts = [];

    // <editor-fold collapsed desc="Getters/Setters">

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return BlogPost[]
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * @param BlogPost $post
     * @return User
     */
    public function addPost(BlogPost $post): User
    {
        array_push($this->posts, $post);
        return $this;
    }

    // </editor-fold>
}
