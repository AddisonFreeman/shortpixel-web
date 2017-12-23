<?php

namespace ShortPixel;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	function print() {
		echo ($this->$filePath);
	};
}