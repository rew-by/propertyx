<h1>Kitchen List</h1>

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
			    <?php if ($kitchen_list->count() !== false && $kitchen_list->count() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="2"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
						<?php foreach ($kitchen_list as $key => $kitchen): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				      <td width="98%"><?php echo $kitchen->getName() ?></td>
				      <td width="2%"><a href="<?php echo url_for('kitchen/edit?id='.$kitchen->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a></td>
				    </tr>
				    <?php endforeach; ?>
				   <?php endif; ?>
			  </tbody>
			 	<tfoot>
					<tr>
						<th colspan="2" class="textright">
							<a href="<?php echo url_for('kitchen/new') ?>" title="New">New</a>
						</th>
					</tr>
				</tfoot>
			</table>
  	</div>
  </div>
</div>