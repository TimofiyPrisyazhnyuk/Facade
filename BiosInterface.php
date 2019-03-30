<?php

namespace Facade;

/**
 * Interface BiosInterface
 * @package Facade
 */
interface BiosInterface
{
    /**
     * @return mixed
     */
    public function execute();

    /**
     * @return mixed
     */
    public function waitForKeyPress();

    /**
     * @param OsInterface $os
     * @return mixed
     */
    public function launch(OsInterface $os);

    /**
     * @return mixed
     */
    public function powerDown();
}
