<?php

namespace ShortPixel;

abstract class OptimizedItemsProducer 
{
	private $result;
	private $total;
    function __construct()
    {
        // $this->total = $total;
        // $this->count = $count;
    }

    function set_result($result) {
    	$this->result = $result;
    }

    function set_total($total) {
    	$this->total = $total;
    }

	public function aprint() {
		return $this->total - $this->count;
	}
	
}