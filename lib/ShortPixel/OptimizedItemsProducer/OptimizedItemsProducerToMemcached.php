<?php

namespace ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends \ShortPixel\OptimizedItemsProducer
{
	// private $mem;
	
	function init() {
		// $this->$mem = new \Memcache;
		$memcache = new \Memcache;
		$memcache->addServer('localhost', 11211);
	}

}