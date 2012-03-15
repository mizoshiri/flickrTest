<?php
/**
*
* PHP 5
*
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       Cake.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/

?>
<!DOCTYPE html>
<html id="home" lang="en">
<head>
<?php echo $this->Html->charset(); ?>
<title>
  <?php echo $title_for_layout; ?>
</title>
<?php
  echo $this->Html->meta('icon');

  echo $this->Html->css(array('reset','base'));

  echo '<script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load("jquery", "1.7.1");
  </script>';

  echo $scripts_for_layout;
?>
</head>
<body>
<div id="container">

  <div id="header">
  <h1><?php echo SITE_NAME; ?></h1>
  <div id="navi">
    <ul>
      <li><a href="/companies">Companies</a></li>
      <li><a href="/cates">Cates</a></li>
      <li><a href="/sites">Sites</a></li>
      <li><a href="/posts">Posts</a></li>
      <li><a href="/users">Users</a></li>
      <li><a href="/sazaes/">Sazaes</a></li>
    </ul>
  </div>
</div>

<div id="wrap">
  <div id="content">
    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>
  </div><!-- end #content -->
  <div id="side">
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add New'), array('action' => 'add')); ?></li>
	</ul>
</div>

  </div><!-- end #content -->

</div><!-- end #wrap -->
<div id="footer">
  <p>Sazae</p>
</div><!-- end #footer -->
</div><!-- end #container -->
</body>
</html>