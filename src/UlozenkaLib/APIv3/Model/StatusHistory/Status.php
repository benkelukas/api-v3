<?php

namespace UlozenkaLib\APIv3\Model\StatusHistory;

/**
 * Class Status
 * @package UlozenkaLib\APIv3\Model\StatusHistory
 */
class Status
{

    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
