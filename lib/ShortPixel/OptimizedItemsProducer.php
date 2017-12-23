<?php

namespace ShortPixel;

class OptimizedItemsProducer 
{
 
    private $folderPath;

    function __construct(string $folderPath)
    {
        $this->folderPath = $folderPath;
    }

}