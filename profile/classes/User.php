<?php

namespace classes;

class User {
    protected $name;
    protected $age;
    protected $profession;
    protected $link;

    function __construct(string $name, int $age, string $profession, string $link)
    {
        $this->name = $name;
        $this->age = $age;
        $this->profession = $profession;
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

}