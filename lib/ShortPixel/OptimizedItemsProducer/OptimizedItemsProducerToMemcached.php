<?php

namespace ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends \ShortPixel\OptimizedItemsProducer
{
	public $mem;
	
	function init() {
		$memcache = new \Memcache;
		$memcache->addServer('localhost', 11211);
		$result = $this->get_result();
		$total = $this->get_total();
		$remaining = $total - $result;
		// $memcache->set('remaining', $remaining);
		$this->mem = $memcache;
	}
}