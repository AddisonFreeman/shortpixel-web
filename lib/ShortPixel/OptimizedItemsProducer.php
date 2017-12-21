<?php

namespace ShortPixel;

abstract class OptimizedItemsProducer 
{
 
    private $folderPath;

    function __construct(String $folderPath)
    {
        $this->folderPath = $folderPath;
    }

}