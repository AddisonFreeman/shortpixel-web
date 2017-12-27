<?php

namespace ShortPixel\OptimizedItemsProducer;

use \ShortPixel\OptimizedItemsProducer;
use \Memcache;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	private $mem;
	
	function init() {
		$this->$mem = new Memcache;
		$this->mem->addServer('localhost', 11211);
	}

}