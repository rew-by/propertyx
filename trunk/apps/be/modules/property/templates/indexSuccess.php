<?php use_helper('Javascript') ?>

<h1><?php echo __('Property List') ?></h1>

<div id="p_be_list">
	
	<?php include_partial('filter', array('filter' => $filter)); ?>
	
	<div class="table">
		<div class="body">
			<table>
			  <thead>
			    <tr>
			      <th><?php echo link_to(__('Municipality'), 'property/index?sort=municipality&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo __('Area') ?></th>
			      <th><?php echo __('Address') ?></th>
			      <th><?php echo link_to(__('Offer'), 'property/index?sort=offer_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Type'), 'property/index?sort=type_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Typology'), 'property/index?sort=typology_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('State'), 'property/index?sort=state_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Year'), 'property/index?sort=year&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Surface'), 'property/index?sort=surface&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Price'), 'property/index?sort=price&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th class="textright"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php if ($pager->getNbResults() !== false && $pager->getNbResults() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="11"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
				    <?php foreach ($pager->getResults() as $key => $property): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				      <td><?php echo $property->getMunicipality() ?></td>
				      <td><?php echo $property->getArea() ?></td>
				      <td><?php echo $property->getAddress() ?></td>
				      <td><?php echo $property->getOffer()->getName() ?></td>
				      <td><?php echo $property->getType()->getName() ?></td>
				      <td><?php echo $property->getTypology()->getName() ?></td>
				      <td><?php echo $property->getState()->getName() ?></td>
				      <td><?php echo $property->getYear() ?></td>
				      <td><?php echo $property->getSurface() ?></td>
				      <td><?php echo $property->getPrice() ?></td>
				      <td class="textright">
				      	<?php if ($property->getIsPublic()) : ?>
									<?php echo image_tag('famfamicons/tick.png', 'alt=Yes') ?>
								<?php else: ?>
									<?php echo image_tag('famfamicons/cross.png', 'alt=No') ?>
								<?php endif ?>
								<?php echo link_to_remote(image_tag('famfamicons/magnifier.png', 'class=lightSwitcher'), array(
								    'update' => 'feedback',
								    'url'    => 'property/show?id='.$property->getId(),
										'method' => 'get',
										'script' => 'true',
										'complete'=> visual_effect('appear', 'p_shadow', array('from' => 0.0, 'to' => 0.8)),
								)) ?>
				      	<a href="<?php echo url_for('property/edit?id='.$property->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a>
				      </td>
				    </tr>
				    <?php endforeach; ?>
				   <?php endif; ?>
			  </tbody>
			  <tfoot>
					<tr>
						<th colspan="6">
							<?php echo __('Total properties') .": ". $pager->getNbResults() ?><br />
							<?php include_partial('property/pager', array('pager' => $pager, 'paging' => 'property/index')); ?>
						</th>
						<th colspan="6" class="textright">
							<a href="<?php echo url_for('property/new') ?>" title="New"><?php echo __('New') ?></a>
						</th>
					</tr>
				</tfoot>
			</table>
  	</div>
  </div>
</div>
<div id="feedback"></div>
<div id="p_shadow" style="display:none;"></div>