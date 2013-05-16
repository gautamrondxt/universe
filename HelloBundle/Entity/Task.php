<?php
// src/Acme/TaskBundle/Entity/Task.php
namespace Acme\HelloBundle\Entity;
class Task
{
    protected $task;
    protected $dueDate;
    protected $description;
    protected $check;

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
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    
     public function getCheck()
    {
        return $this->check;
    }
    
    public function setCheck($check)
    {
        $this->check = $check;
    }
    
}

?>