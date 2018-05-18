<?php
class Process {
    private $current;
    private $id;
    private $name;
    private $next;
    private $nodes;
    private $db;

    //
    public function __construct($db, $pid = null)
    {
        $this->db = $db;

        if ($pid)
        {
            $this->find($pid);
            return $this;
        }
    }

    //return a Process object
    public function find($pid)
    {
        $this->id = $pid;
        $this->name = "Reimbursement Process";
    }

    //return bool
    //set current process to next node
    public function pass()
    {

    }

    //set current process to first node
    public function fail()
    {

    }

    //get all nodes of current process
    public function get()
    {
        return array(1,2,3,4);
    }

    public function __get($name)
    {
        return $this->$name;
    }
}