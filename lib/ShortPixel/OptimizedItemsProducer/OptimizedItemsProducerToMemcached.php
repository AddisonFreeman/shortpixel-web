<?php

namespace ShortPixel;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	public function aprint() {
		return "to Memcached printed";
	}
}