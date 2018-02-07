<?php

namespace ShortPixel;

abstract class OptimizedItemsProducer 
{
	public $result;
	public $total;
    function __construct()
    {
        // $this->total = $total;
        // $this->count = $result;
    }

    function set_result($result) {
    	$this->result = $result;
    	return $this;
    }

    function set_total($total) {
    	$this->total = $total;
    	return $this;
    }

    function get_result() {
    	return $this->result;
    }

    function get_total() {
    	return $this->total;
    }

	public function aprint() {
		return $this->total - $this->result;
	}
}