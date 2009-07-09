<h1>Type List</h1>

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
			  	<?php if ($type_list->count() !== false && $type_list->count() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="2"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
				    <?php foreach ($type_list as $key => $type): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				      <td width="98%"><?php echo $type->getName() ?></td>
				      <td width="2%"><a href="<?php echo url_for('type/edit?id='.$type->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a></td>
				    </tr>
				    <?php endforeach; ?>
				  <?php endif; ?>
			  </tbody>
				<tfoot>
					<tr>
						<th colspan="2" class="textright">
							<a href="<?php echo url_for('type/new') ?>" title="New">New</a>
						</th>
					</tr>
				</tfoot>
			</table>
  	</div>
  </div>
</div>