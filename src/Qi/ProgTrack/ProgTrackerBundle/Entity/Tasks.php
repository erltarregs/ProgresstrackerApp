<?php

namespace Qi\ProgTrack\ProgTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity(repositoryClass="Qi\ProgTrack\ProgTrackerBundle\Repository\TasksRepository")
 */
class Tasks
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
     * @var string
     *
     * @ORM\Column(name="TasksDescription", type="string", length=255)
     */
    private $tasksDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=1)
     */
    private $status;


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
     * Set tasksDescription
     *
     * @param string $tasksDescription
     *
     * @return Tasks
     */
    public function setTasksDescription($tasksDescription)
    {
        $this->tasksDescription = $tasksDescription;

        return $this;
    }

    /**
     * Get tasksDescription
     *
     * @return string
     */
    public function getTasksDescription()
    {
        return $this->tasksDescription;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Tasks
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

