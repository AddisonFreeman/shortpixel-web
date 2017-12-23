<?php

namespace ShortPixel\OptimizedItemsProducer;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	public function aprint($filePath) {
		return "to Memcached printed";
	}
}