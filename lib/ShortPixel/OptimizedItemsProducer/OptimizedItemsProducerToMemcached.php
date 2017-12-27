<?php

class OptimizedItemsProducerToMemcached extends \ShortPixel\OptimizedItemsProducer
{
	private $mem;
	
	function init() {
		$this->$mem = new Memcache;
		$this->mem->addServer('localhost', 11211);
	}

}