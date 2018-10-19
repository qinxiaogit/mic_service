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
 * 用户表

 * @Entity()
 * @Table(name="users")
 * @uses      Users
 */
class Users extends Model
{
    /**
     * @var string $name 
     * @Column(name="name", type="char", length=10)
     * @Required()
     */
    private $name;

    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $phone 
     * @Column(name="phone", type="char", length=11)
     */
    private $phone;

    /**
     * @var string $headUrl 头像地址
     * @Column(name="headUrl", type="char", length=64)
     * @Required()
     */
    private $headUrl;

    /**
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

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
     * @param string $value
     * @return $this
     */
    public function setPhone(string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * 头像地址
     * @param string $value
     * @return $this
     */
    public function setHeadUrl(string $value): self
    {
        $this->headUrl = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 头像地址
     * @return string
     */
    public function getHeadUrl()
    {
        return $this->headUrl;
    }

}
