<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=63)
     */
    private $first_name;
    /**
     * @ORM\Column(type="string", length=63)
     */
    private $last_name;
    /**
     * @ORM\Column(type="string", length=127)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avatar;
    /**
     * @ORM\Column(type="boolean")
     */
    private $gender;
    /**
     * @ORM\Column(type="integer")
     */
    private $status = 1;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return User
     */
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return User
     */
    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return User
     */
    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param $avatar
     * @return User
     */
    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     * @return User
     */
    public function setGender(int $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param $status
     * @return User
     */
    public function setStatus($status): self
    {
        $this->status = $status;
        return $this;
    }

}
