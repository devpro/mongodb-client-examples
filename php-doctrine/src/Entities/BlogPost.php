<?php

namespace App\Entities;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class BlogPost
 * @package App\Entities
 *
 * @ODM\Document()
 */
class BlogPost
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
    private $title;

    /**
     * @var string
     *
     * @ODM\Field(type="string")
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ODM\Field(type="date")
     */
    private $createdAt;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BlogPost
     */
    public function setTitle(string $title): BlogPost
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return BlogPost
     */
    public function setBody(string $body): BlogPost
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return BlogPost
     */
    public function setCreatedAt(\DateTime $createdAt): BlogPost
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    // </editor-fold>
}
