<?php

namespace ShortPixel;

class OptimizedItemsProducerToMemcached extends OptimizedItemsProducer
{
	function print() {
		echo ($this->$filePath);
	};
}