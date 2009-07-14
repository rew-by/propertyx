<h1><?php echo __('Customer List') ?></h1>

<div id="p_be_list">
	<div class="table">
		<div class="body">
			<table>
			  <thead>
			    <tr>
			    	<th><?php echo link_to(__('Surname'), 'customer/index?sort=surname&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Name'), 'customer/index?sort=name&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Phone'), 'customer/index?sort=phone&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Mobile'), 'customer/index?sort=mobile&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Municipality'), 'customer/index?sort=municipality&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Offer'), 'customer/index?sort=offer_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Type'), 'customer/index?sort=type_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Typology'), 'customer/index?sort=typology_id&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th><?php echo link_to(__('Max Price'), 'customer/index?sort=maxprice&sort_type='.($sort_type == 'asc' ? 'desc' : 'asc')) ?></th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php if ($pager->getNbResults() !== false && $pager->getNbResults() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="11"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
				   <?php foreach ($pager->getResults() as $key => $customer): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				      <td><?php echo $customer->getSurname() ?></td>
				      <td><?php echo $customer->getName() ?></td>
				      <td><?php echo $customer->getPhone() ?></td>
				      <td><?php echo $customer->getMobile() ?></td>
				      <td><?php echo $customer->getNewmunicipality() ?></td>
				      <td><?php echo $customer->getOffer()->getName() ?></td>
				      <td><?php echo $customer->getType()->getName() ?></td>
				      <td><?php echo $customer->getTypology()->getName() ?></td>
				      <td><?php echo $customer->getMaxprice() ?></td>
				      <td>
				      	<?php if ($customer->getIsActive()) : ?>
									<?php echo image_tag('famfamicons/tick.png', 'alt=Yes') ?>
								<?php else: ?>
									<?php echo image_tag('famfamicons/cross.png', 'alt=No') ?>
								<?php endif ?>
				      	<a href="<?php echo url_for('customer/edit?id='.$customer->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a>
				      </td>
				    </tr>
				    <?php endforeach; ?>
				  <?php endif; ?>
			  </tbody>
			  <tfoot>
					<tr>
						<th colspan="6">
							<?php echo __('Total customers') .": ". $pager->getNbResults() ?><br />
							<?php include_partial('property/pager', array('pager' => $pager, 'paging' => 'customer/index')); ?>
						</th>
						<th colspan="6" class="textright">
							<a href="<?php echo url_for('customer/new') ?>" title="New"><?php echo __('New') ?></a>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
  </div>
</div>