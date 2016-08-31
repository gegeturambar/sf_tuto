<?php

namespace AppBundle\Entity;

class Task
{
    protected $task;
    protected $dueDate;
    protected $priority;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority(integer $priority = null)
    {
        $this->priority = $priority;
    }
}
