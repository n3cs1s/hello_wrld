<?php

echo "<h1>Hello world</h1>";

/*$spider = new Spider('http://www.dmoz.org');
$spider->getDiscovererSet()->set(new XPathExpressionDiscoverer("//div[@id='catalogs']//a"));
$spider->getDiscovererSet()->maxDepth = 1;
$spider->getQueueManager()->maxQueueSize = 10;


$statsHandler = new StatsHandler();
$spider->getQueueManager()->getDispatcher()->addSubscriber($statsHandler);
$spider->getDispatcher()->addSubscriber($statsHandler);

echo "<br />Start spider.. <br />";
$spider->crawl();

echo "<br />\n  ENQUEUED:  " . count($statsHandler->getQueued());
echo "<br />\n  SKIPPED:   " . count($statsHandler->getFiltered());
echo "<br />\n  FAILED:    " . count($statsHandler->getFailed());
echo "<br />\n  PERSISTED:    " . count($statsHandler->getPersisted());




echo "<br />\n\nDOWNLOADED RESOURCES: ";
foreach ($spider->getDownloader()->getPersistenceHandler() as $resource) {
    echo "<br />\n - " . $resource->getCrawler()->filterXpath('//title')->text();
}
*/
