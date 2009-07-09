<h1>State List</h1>

<div id="p_be_list">
	<div class="table">
		<div class="body">
			<table>
			  <thead>
			    <tr>
			      <th colspan="2"><?php echo __('Name')?></th>
			    </tr>
			  </thead>
			  <tbody>
			 		<?php if ($state_list->count() !== false && $state_list->count() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="2"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
				    <?php foreach ($state_list as $key => $state): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				      <td width="98%"><?php echo $state->getName() ?></td>
				      <td width="2%"><a href="<?php echo url_for('state/edit?id='.$state->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a></td>
				    </tr>
				    <?php endforeach; ?>
				  <?php endif; ?>
			  </tbody>
				<tfoot>
					<tr>
						<th colspan="2" class="textright">
							<a href="<?php echo url_for('state/new') ?>" title="New">New</a>
						</th>
					</tr>
				</tfoot>
			</table>
  	</div>
  </div>
</div>