<?php

namespace ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends \ShortPixel\OptimizedItemsProducer
{
	public $mem;
	
	function init() {
		// $this->$mem = new \Memcache;
		$memcache = new \Memcache;
		$memcache->addServer('localhost', 11211);
		$result = $this->get_result();
		$total = $this->get_total();
		$remaining = $total - $result;
		$memcache->set('remaining', $remaining);
		$this->mem = $memcache;
	}

	function update() {
		$result = $this->get_result();
		$total = $this->get_total();
		$remaining = $total - $result;
		$this->mem->set('remaining', $remaining);
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