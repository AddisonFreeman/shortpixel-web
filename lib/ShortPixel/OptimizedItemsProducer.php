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
		echo count($this->result->succeeded)."\r\n";
		echo $this->total."\r\n";
		return count($this->result->succeeded) - $this->total;
	}
	
}