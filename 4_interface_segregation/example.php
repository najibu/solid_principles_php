<?php
/* Interface Segregation */
// States that a client should not be forced to implement an interface that it doesn't use.

interface ManagableInterface
{
    public function beManaged();
}


interface WorkableInterface
{
    public function work();
}


interface SleepableInterface
{
    public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface
{
    public function work()
    {
        return 'Human working';
    }

    public function sleep()
    {
        return 'Human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

// Should not force AndroidWorker to implement the sleep method
class AndroidWorker implements WorkableInterface, ManagableInterface
{
    public function work()
    {
        return 'Android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}

class Captain
{
    public function manage(ManagableInterface $worker)
    {
        return $worker->beManaged();
    }
}
