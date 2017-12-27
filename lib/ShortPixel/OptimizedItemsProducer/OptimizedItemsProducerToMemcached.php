<?php

namespace ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends \ShortPixel\OptimizedItemsProducer
{
	public $mem;
	
	function init() {
		// $this->$mem = new \Memcache;
		$memcache = new \Memcache;
		$memcache->addServer('localhost', 11211);
		$memcache->set('remaining', 22;
		$this->mem = $memcache;
	}

}