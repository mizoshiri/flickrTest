<?php
echo $this->element('pager');

echo "<ul>";
echo $this->Flickr->getPhotoLists(
    $list,
    array('type' => 'li'),
    array('class' => 'lightview'),
    array('size' => 'm')
);
echo "</ul>";

echo $this->element('pager');