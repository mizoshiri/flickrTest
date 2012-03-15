<?php
//echo $this->Form->create('Gallery', array('action' => 'search'));
echo $this->Form->create('Key', array('url' => 'index'));
echo $this->Form->input('k',array('label' => false));
echo $this->Form->end(__("Search"));