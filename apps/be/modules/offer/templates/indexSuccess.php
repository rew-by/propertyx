<h1>Offer List</h1>

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
			  	<?php if ($offer_list->count() !== false && $offer_list->count() == 0): ?>
			  	  <tr class="row_0">
              <td colspan="2"><?php echo __('No Results') ?></td>
            </tr>
          <?php else: ?>
				    <?php foreach ($offer_list as $key => $offer): ?>
				    <tr class="<?php if ($key % 2 == 0) echo "row_0"; else echo "row_1"; ?>">
				      <td width="98%"><?php echo $offer->getName() ?></td>
				      <td width="2%"><a href="<?php echo url_for('offer/edit?id='.$offer->getId()) ?>"><?php echo image_tag('famfamicons/application_edit.png') ?></a></td>
				    </tr>
				    <?php endforeach; ?>
				   <?php endif; ?>
			  </tbody>
				<tfoot>
					<tr>
						<th colspan="2" class="textright">
							<a href="<?php echo url_for('offer/new') ?>" title="New">New</a>
						</th>
					</tr>
				</tfoot>
			</table>
  	</div>
  </div>
</div>