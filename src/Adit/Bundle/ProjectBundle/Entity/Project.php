<?php

namespace Adit\Bundle\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="adit_project")
 * @ORM\Entity
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="naziv", type="string")
     */
    private $naziv;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set naziv
     *
     * @param string $naziv
     * @return Project
     */
    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;

        return $this;
    }

    /**
     * Get naziv
     *
     * @return string 
     */
    public function getNaziv()
    {
        return $this->naziv;
    }

}
