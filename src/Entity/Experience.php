<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\HasLifecycleCallbacks()
 * @ApiResource(normalizationContext={"groups"={"experience"}})
 * @ORM\Entity(repositoryClass="App\Repository\ExperienceRepository")
 */
class Experience
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("experience")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("experience")
     */
    private $name;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("experience")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("experience")
     */
    private $dateRealization;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("experience")
     */
    private $contract;

    /**
     * @ORM\PrePersist
     */
    public function CreatedExperience()
    {
        $this->created = new \DateTime();
        $this->updated = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function UpdatedExperience()
    {
        $this->updated = new \DateTime();
    }


    public function getId(): ?int
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

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateRealization(): ?\DateTimeInterface
    {
        return $this->dateRealization;
    }

    public function setDateRealization(\DateTimeInterface $dateRealization): self
    {
        $this->dateRealization = $dateRealization;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }
}
