<?php

namespace Facade;

/**
 * Interface OsInterface
 * @package Facade
 */
interface OsInterface
{
    /**
     * @return mixed
     */
    public function halt();

    /**
     * @return string
     */
    public function getName(): string;
}
