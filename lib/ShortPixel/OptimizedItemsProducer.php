<?php

namespace ShortPixel;

abstract class OptimizedItemsProducer 
{
	private $result;
	private $total;
    function __construct($result, $total)
    {
        $this->result = $result;
        $this->total = $total;
    }

	public function aprint() {
		return count($this->result->succeeded) - $this->total;
	}
	
}