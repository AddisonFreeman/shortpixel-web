<?php

namespace ShortPixel;

abstract class OptimizedItemsProducer 
{
	private $result;
	private $total;
    function __construct($total, $count)
    {
        $this->total = $total;
        $this->count = $count;
        
    }

	public function aprint() {
		return $this->total - $this->count;
	}
	
}