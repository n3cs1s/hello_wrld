<?php
/**
 * Hello world
 *
 * @author P Stepanovych
 * @copyright Copyright (c) 2017-2017, P Stepanovych
 */
require_once __DIR__ . '/vendor/autoload.php';
//use Symfony\Component\EventDispatcher\Event;

elgg_register_event_handler('init', 'system', function() {
	
	//elgg_register_action('dropzone/upload', __DIR__ . '/actions/dropzone/upload.php');
	// @see views.php for view locations
	//elgg_extend_view('elgg.css', 'css/dropzone/stylesheet');
	//elgg_extend_view('admin.css', 'css/dropzone/stylesheet');
//$dispatcher = new EventDispatcher();
/*$dispatcher->addListener('on.scroll', function (Event $event) {
    // will be executed when the foo.action event is dispatched
});*/
	// register the JavaScript
	$js = elgg_get_simplecache_url('js', 'hello_wrld/js');
	elgg_register_simplecache_view('js/hello_wrld/js');
	elgg_register_js('elgg.hello_wrld', $js);
	
	
	
	elgg_register_ajax_view('forms/hello_wrld/test_ajax');
  elgg_register_widget_type([
    'id' => 'hello_world',
    'name' => elgg_echo('widgets:hello:world'),
    'description' => elgg_echo('widgets:hello:world'),
]);
  
});
