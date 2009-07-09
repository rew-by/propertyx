<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
  	<?php use_helper('Javascript') ?>
    <div id="p_menu">
    	<ul>
    		<?php if ($sf_user->isAuthenticated()): ?>
    			<li><?php echo link_to(__('Property'), 'property/index') ?></li>
	    		<li><?php echo link_to(__('Images'), 'sfAsset/index') ?></li>
	    		<li><?php echo link_to_function('Settings',visual_effect('appear', 'p_submenu')) ?></li>
					<li><?php echo link_to('Log out', '@sf_guard_signout') ?></li>
				<?php else : ?>
					<li><?php echo link_to('Log in', '@sf_guard_signin') ?></li>
				<?php endif; ?>
    	</ul>
    </div>
    <div id="p_submenu" style="display:none;">
    	<ul>
    		<li><?php echo link_to(__('Type'), 'type/index') ?></li>
    		<li><?php echo link_to(__('Typology'), 'typology/index') ?></li>
    		<li><?php echo link_to(__('Kitchen'), 'kitchen/index') ?></li>
    		<li><?php echo link_to(__('Offer'), 'offer/index') ?></li>
    		<li><?php echo link_to(__('State'), 'state/index') ?></li>
    		<li><?php echo link_to_function('Close menu',visual_effect('fade', 'p_submenu')) ?></li>
    	</ul>
    </div>
    <?php echo $sf_content ?>
  </body>
</html>

