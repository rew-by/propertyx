<?php use_helper('sfAsset') ?>
<?php use_helper('Javascript') ?>
<?php use_helper('Number') ?>

<div id="p_be_show">
	<div id="p_links">
		<?php echo link_to_function(__('Close'), visual_effect('fade', 'p_be_show') . visual_effect('fade', 'p_shadow')) ?>
	</div>
	<div id="p_title">
		<?php echo $property->getMunicipality() ?> <?php echo $property->getArea() ?> <?php echo $property->getAddress() ?><br />
		<?php echo $property->getType()->getName() ?> <?php echo $property->getTypology()->getName() ?>
	</div>
	
	<?php if ($property->getsfAssetFolderId()) : ?>
		<div id="p_image">
			<?php foreach ($property->getsfAssetFolder()->getAssetsWithFilenames() as $image) : ?>
				<?php echo image_tag($property->getsfAssetFolder()->getUrl().'/'.$image->getFilename(), 'height=250')?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	
	<div id="p_description">
		<div id="p_description_left">
			<?php echo $property->getDescription() ?>
		</div>
		<div id="p_description_right">
			<?php echo __('State') .": ". $property->getState()->getName() ?><br />
  		<?php echo __('Year') .": ". $property->getYear() ?><br />
  		<?php echo __('Kitchen') .": ". $property->getKitchen()->getName() ?><br />
  		<?php echo __('Bedroom') .": ". $property->getBedroom() ?><br />
  		<?php echo __('Bath') .": ". $property->getBath() ?><br />
  		<?php echo __('Heating') .": ". $property->getHeating() ?><br />
  		<?php echo __('Floors') .": ". $property->getFloors() ?><br />
  		<?php echo __('On floor') .": ". $property->getOnFloor() ?><br />
  		<?php echo __('Entrance') .": ". $property->getEntrance() ?><br />
		</div>
		<div style="clear:both;"></div>
	</div>
	
	<div id="p_price">
		<?php echo sfConfig::get('app_surface')." ".$property->getSurface() ?> <?php echo format_currency($property->getPrice(), sfConfig::get('app_currency')) ?>
	</div>
</div>