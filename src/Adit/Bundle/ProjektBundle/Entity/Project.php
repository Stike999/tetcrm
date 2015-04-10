<?php

namespace Adit\Bundle\ProjektBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="project")
 */

class Project {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="ProjectType", inversedBy="projects")
     * @ORM\JoinColumn(name="typeId", referencedColumnName="id")
     */
    protected $typeId;
    
    /**
     * @ORM\ManyToOne(targetEntity="ProjectStatus", inversedBy="projects")
     * @ORM\JoinColumn(name="statusId", referencedColumnName="id")
     */
    protected $statusId;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $completed;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $anticipatedExpenses;
    
    /**
     * @ORM\Column(type="float")
     */
    protected $anticipatedRevenues;
}