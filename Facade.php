<?php

namespace Facade;

/**
 * Class Facade
 * @package Facade
 */
class Facade
{
    /**
     * @var OsInterface
     */
    private $os;

    /**
     * @var BiosInterface
     */
    private $bios;

    /**
     * @param BiosInterface $bios
     * @param OsInterface   $os
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    /**
     * Turn on system logic.
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * Turn off system logic.
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
