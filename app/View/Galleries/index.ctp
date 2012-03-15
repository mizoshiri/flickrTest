<?php

echo $this->element('search');

echo $this->element('pager');
echo "<ul>";
echo $this->Flickr->getPhotos(
    $photos,
    array('type' => 'li'),
    array('rel' => 'example1', 'title' => 'flickr_title' ,'class' => 'lightview',),
    array('size' => 'm'),
    array(),
    array('type' => 'p', 'caption' => 'flickr_description')
);
echo "</ul>";

echo $this->element('pager');