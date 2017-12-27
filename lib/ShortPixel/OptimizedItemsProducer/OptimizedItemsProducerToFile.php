<?php

namespace ShortPixel\OptimizedItemsProducer;

use \ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToFile extends OptimizedItemsProducer
{
	public function printToFile() {
		file_put_contents(".shortpixel-q", $this->aprint())	
	}
	
}