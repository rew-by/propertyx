<div class="table filter">
	<div class="body">
		<form action="<?php echo url_for('property/index') ?>" method="get">
			<table>
			  <thead>
			    <tr>
			    	<th><?php echo __('Municipality') ?></th>
			    	<th><?php echo __('Offer') ?></th>
			    	<th><?php echo __('Type') ?></th>
			    	<th><?php echo __('Typology') ?></th>
			    	<th><?php echo __('State') ?></th>
			    	<th><?php echo __('Max Price') ?></th>
					</tr>
			  </thead>
			  <tbody>
			  	<td><?php echo $filter['municipality']->renderError('<br/>') ?><?php echo $filter['municipality'] ?></td>
			  	<td><?php echo $filter['offer_id']->renderError('<br/>') ?><?php echo $filter['offer_id'] ?></td>
			  	<td><?php echo $filter['type_id']->renderError('<br/>') ?><?php echo $filter['type_id'] ?></td>
			  	<td><?php echo $filter['typology_id']->renderError('<br/>') ?><?php echo $filter['typology_id'] ?></td>
			  	<td><?php echo $filter['state_id']->renderError('<br/>') ?><?php echo $filter['state_id'] ?></td>
			  	<td><?php echo $filter['price']->renderError('<br/>') ?><?php echo $filter['price'] ?></td>
			  </tbody>
			  <tfoot>
					<tr>
						<th colspan="6" style="text-align: center;">
							<?php echo $filter->renderHiddenFields() ?>
							<?php echo link_to(__('Reset'), 'property/index') ?> <input type="submit" value="<?php echo __('Filter') ?>" />
						</th>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
</div>