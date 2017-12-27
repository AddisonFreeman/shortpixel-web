<?php

namespace ShortPixel\OptimizedItemsProducer;

class OptimizedItemsProducerToFile extends \ShortPixel\OptimizedItemsProducer
{
	public function printToFile() {
		file_put_contents(".shortpixel-q", $this->aprint());	
	}
	
}