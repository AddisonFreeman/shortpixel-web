<?php

namespace ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToFile extends \ShortPixel\OptimizedItemsProducer
{
	public function printToFile($data) {
		file_put_contents(".shortpixel-q", $data);	
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
}