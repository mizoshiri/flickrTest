<div id="pager">
<?php
echo "(All ".$photos['photos']['total'].")";
for($i=1; $i <= $photos['photos']['pages']; $i++){
  if($i === $photos['photos']['page']){
    echo '<span class="current">'.$i.'</span> |';
  }else {
    if(isset($named['k'])){
      echo '<span><a href="/galleries/index/page:'.$i.'/k:'.$named['k'].'">'.$i.'</a></span> |';
    }else{
      echo '<span><a href="/galleries/index/page:'.$i.'">'.$i.'</a></span> |';
    }
    
  }
}
?>
</div>