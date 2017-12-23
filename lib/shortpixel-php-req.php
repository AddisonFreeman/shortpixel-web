<?php
/*
function __autoload($class_name) {
    require_once("./$class_name.php");
}
use ShortPixel\OptimizedItemsProducer;
use ShortPixel\OptimizedItemsProducer\OptimizedItmesProducerToFile;
use ShortPixel\OptimizedItemsProducer\OptimizedItmesProducerToMemcached;
use ShortPixel\Persister;
use ShortPixel\Commander;
use ShortPixel\Client;
use ShortPixel\Exception;
use ShortPixel\Source;
use ShortPixel\persist\TextPersister;
use ShortPixel\persist\ExifPersister;
use ShortPixel\persist\PNGMetadataExtractor;
use ShortPixel\persist\PNGReader;
use ShortPixel\Result;
use ShortPixel;
*/
use ShortPixel\OptimizedItemsProducer\OptimizedItmesProducerToFile;

require_once("ShortPixel/OptimizedItemsProducer.php");
require_once("ShortPixel/OptimizedItemsProducer/OptimizedItemsProducerToFile.php");
require_once("ShortPixel/OptimizedItemsProducer/OptimizedItemsProducerToMemcached.php");
require_once("ShortPixel/Settings.php");
require_once("ShortPixel/Lock.php");
require_once("ShortPixel/Persister.php");
require_once("ShortPixel/persist/TextPersister.php");
require_once("ShortPixel/persist/ExifPersister.php");
require_once("ShortPixel/persist/PNGMetadataExtractor.php");
require_once("ShortPixel/persist/PNGReader.php");
require_once("ShortPixel/Commander.php");
require_once("ShortPixel/Client.php");
require_once("ShortPixel/Exception.php");
require_once("ShortPixel/Source.php");
require_once("ShortPixel/Result.php");
require_once("ShortPixel.php");

