<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\HasLifecycleCallbacks()
 * @ApiResource(normalizationContext={"groups"={"work"}})
 * @ORM\Entity(repositoryClass="App\Repository\WorkRepository")
 */
class Work
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("filter")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("work")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=1023)
     * @Groups("work")
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Groups("work")
     */
    private $dateRealization;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     * @Groups("work")
     */
    private $updated;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\WorkFilter", inversedBy="works")
     * @Groups("work")
     */
    private $filters;

    public function __toString() {
        return $this->title;
    }

    public function __construct()
    {
        $this->filters = new ArrayCollection();
    }

    /**
     * @ORM\PrePersist
     */
    public function CreatedWork()
    {
        $this->created = new \DateTime();
        $this->updated = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function UpdatedWork()
    {
        $this->updated = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    /**
     * @return Collection|WorkFilter[]
     */
    public function getFilters(): Collection
    {
        return $this->filters;
    }

    public function addFilter(WorkFilter $filter): self
    {
        if (!$this->filters->contains($filter)) {
            $this->filters[] = $filter;
        }

        return $this;
    }

    public function removeFilter(WorkFilter $filter): self
    {
        if ($this->filters->contains($filter)) {
            $this->filters->removeElement($filter);
        }

        return $this;
    }
}
