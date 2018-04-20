<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
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
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $gender;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $created_time;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $updated_time;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getCreatedTime(): ?int
    {
        return $this->created_time;
    }

    public function setCreatedTime(?int $created_time): self
    {
        $this->created_time = $created_time;

        return $this;
    }

    public function getUpdatedTime(): ?int
    {
        return $this->updated_time;
    }

    public function setUpdatedTime(?int $updated_time): self
    {
        $this->updated_time = $updated_time;

        return $this;
    }
}
