<?php

namespace ShortPixel;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	function print() {
		return "to Memcached printed";
	}
}