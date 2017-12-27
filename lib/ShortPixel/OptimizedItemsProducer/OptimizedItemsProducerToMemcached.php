<?php

namespace ShortPixel\OptimizedItemsProducer;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	private $mem;
	
	function init() {
		$this->$mem = new Memcache();
		$this->mem->addServer("127.0.0.1", 11211);
	}

}