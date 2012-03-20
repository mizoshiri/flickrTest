<div id="pager">
  <div class="paging">
  <?php
  if(isset($k)){
    $this->Paginator->options(array('url' => $k));
  }
  echo $this->Paginator->prev( __('<', true), array(), null, array('class'=>'disabled'));?>
  <?php echo $this->Paginator->numbers();?> 
  <?php echo $this->Paginator->next(__('>', true), array(), null, array('class' => 'disabled'));?>
  </div>
</div>