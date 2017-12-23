<?php

namespace ShortPixel;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	public function print() {
		return "to Memcached printed";
	}
}