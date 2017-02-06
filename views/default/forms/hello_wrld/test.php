<?php


$title = elgg_extract('title', $vars, '');
echo elgg_view('input/text', array('name' => 'title', 'value' => $title,'class'=>'hello_wrld'));

