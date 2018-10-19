<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * @Entity()
 * @Table(name="pages")
 * @uses      Pages
 */
class Pages extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $authorId 
     * @Column(name="author_id", type="integer")
     * @Required()
     */
    private $authorId;

    /**
     * @var string $title 
     * @Column(name="title", type="string", length=255)
     * @Required()
     */
    private $title;

    /**
     * @var string $excerpt 
     * @Column(name="excerpt", type="text", length=65535)
     */
    private $excerpt;

    /**
     * @var string $body 
     * @Column(name="body", type="text", length=65535)
     */
    private $body;

    /**
     * @var string $image 
     * @Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string $slug 
     * @Column(name="slug", type="string", length=255)
     * @Required()
     */
    private $slug;

    /**
     * @var string $metaDescription 
     * @Column(name="meta_description", type="text", length=65535)
     */
    private $metaDescription;

    /**
     * @var string $metaKeywords 
     * @Column(name="meta_keywords", type="text", length=65535)
     */
    private $metaKeywords;

    /**
     * @var string $status 
     * @Column(name="status", type="string", length=8, default="INACTIVE")
     */
    private $status;

    /**
     * @var string $createdAt 
     * @Column(name="created_at", type="timestamp")
     */
    private $createdAt;

    /**
     * @var string $updatedAt 
     * @Column(name="updated_at", type="timestamp")
     */
    private $updatedAt;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAuthorId(int $value): self
    {
        $this->authorId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setExcerpt(string $value): self
    {
        $this->excerpt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setBody(string $value): self
    {
        $this->body = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setImage(string $value): self
    {
        $this->image = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSlug(string $value): self
    {
        $this->slug = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMetaDescription(string $value): self
    {
        $this->metaDescription = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMetaKeywords(string $value): self
    {
        $this->metaKeywords = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setStatus(string $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCreatedAt(string $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUpdatedAt(string $value): self
    {
        $this->updatedAt = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}
