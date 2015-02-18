<?php

namespace Cooksey\FlappBundle\Factories;

interface CLIWriteInterface
{
    public function doInfo(array $string);
    public function doError($string);
}