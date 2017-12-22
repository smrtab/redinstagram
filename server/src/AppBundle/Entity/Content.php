<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="contents")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContentRepository")
 */
class Content
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="girl_id", type="integer")
     */
    private $girlId;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=1024)
     */
    private $content;

    /**
     * @var Girl
     *
     * @ORM\ManyToOne(targetEntity="Girl", inversedBy="contents")
     * @ORM\JoinColumn(name="girl_id", referencedColumnName="id")*
     */
    private $girl;


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
     * Set girlId
     *
     * @param integer $girlId
     *
     * @return Content
     */
    public function setGirlId($girlId)
    {
        $this->girlId = $girlId;

        return $this;
    }

    /**
     * Get girlId
     *
     * @return int
     */
    public function getGirlId()
    {
        return $this->girlId;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Content
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set girl
     *
     * @param \AppBundle\Entity\Girl $girl
     *
     * @return Content
     */
    public function setGirl(\AppBundle\Entity\Girl $girl = null)
    {
        $this->girl = $girl;

        return $this;
    }

    /**
     * Get girl
     *
     * @return \AppBundle\Entity\Girl
     */
    public function getGirl()
    {
        return $this->girl;
    }
}
