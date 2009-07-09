<h1>Typology List</h1>

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
			  	<?php if ($typology_list->count() !== false && $typology_list->count() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="2"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
				    <?php foreach ($typology_list as $key => $typology): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				    	<td width="98%"><?php echo $typology->getName() ?></td>
				      <td width="2%"><a href="<?php echo url_for('typology/edit?id='.$typology->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a></td>
				    </tr>
				    <?php endforeach; ?>
				  <?php endif; ?>
			  </tbody>
				<tfoot>
					<tr>
						<th colspan="2" class="textright">
							<a href="<?php echo url_for('typology/new') ?>" title="New">New</a>
						</th>
					</tr>
				</tfoot>
			</table>
  	</div>
  </div>
</div>