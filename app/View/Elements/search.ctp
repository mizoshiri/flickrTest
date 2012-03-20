<?php
echo $this->Form->create('Gallery', array('url' => 'index'));
echo $this->Form->input('k',array('label' => false));
echo $this->Form->end(__("Search"));