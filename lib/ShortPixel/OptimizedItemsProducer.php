<?php

namespace ShortPixel;

abstract class OptimizedItemsProducer 
{
 
    private $folderPath;

    function __construct($folderPath)
    {
        $this->folderPath = $folderPath;
    }

}