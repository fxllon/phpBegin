<?php


namespace core;


class Container
{
    protected int $id;
    protected string $name;

    public static function getInstance()
    {
        return new self();
    }

    public function __construct()
    {
        $this->id = 0;
        $this->name = 'abc';
    }

    public function toArray()
    {
        return ['id' => $this->id, 'name' => $this->name];
    }

    public function toString()
    {
        return get_class($this);
    }
}