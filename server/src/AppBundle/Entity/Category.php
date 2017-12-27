<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
{

    public function __construct()
    {
        $this->girls = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=512)
     */
    private $name;

    /**
     * @var ArrayCollection::class
     * @ORM\ManyToMany(targetEntity="Girl", mappedBy="categories")
     */
    private $girls;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add girl
     *
     * @param \AppBundle\Entity\Girl $girl
     *
     * @return Category
     */
    public function addGirl(\AppBundle\Entity\Girl $girl)
    {
        $this->girls[] = $girl;

        return $this;
    }

    /**
     * Remove girl
     *
     * @param \AppBundle\Entity\Girl $girl
     */
    public function removeGirl(\AppBundle\Entity\Girl $girl)
    {
        $this->girls->removeElement($girl);
    }

    /**
     * Get girls
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGirls()
    {
        return $this->girls;
    }
}
