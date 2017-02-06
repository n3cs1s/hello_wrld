<?php

echo "<h1>Hello world</h1>";


$api = new Embedly\Embedly(array(
    'key' => '4ea6ce2594984a5db25642b5b936fd1f',
    'user_agent' => 'Mozilla/5.0 (compatible; mytestapp/1.0)'
));

// Single url
$objs = $api->oembed('http://kinogo.club/5067-agenty-schit-2-sezon.html');
print_r($objs);


?>
<script>
    elgg.get('ajax/form/hello_wrld/test', {
  success: function (output) {
    $('.hello_wrld').html(output);
  }
});
</script>

<br />
<div class='hello_wrld'></div>
<?php


//$spider = new Spider('http://www.dmoz.org');
/*$spider->getDiscovererSet()->set(new XPathExpressionDiscoverer("//div[@id='catalogs']//a"));
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
