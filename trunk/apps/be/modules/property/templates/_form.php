<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div id="p_be_edit">
	<div class="table">
		<div class="body">
			<form action="<?php echo url_for('property/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
			<?php if (!$form->getObject()->isNew()): ?>
			<input type="hidden" name="sf_method" value="put" />
			<?php endif; ?>
			  <table>
			    <tbody>
			      <?php echo $form->renderGlobalErrors() ?>
			      <tr>
			      	<td>
			      		<div class="block">
			      			<div style="float:left;margin-right:16px;">
			      				<?php echo $form['year']->renderLabel() ?><br />
					          <?php echo $form['year']->renderError() ?>
					          <?php echo $form['year']->render(array('size' => '13')) ?><br />
			      			</div>
			      			<div style="float:left;margin-right:16px;">
			      				<?php echo $form['surface']->renderLabel() ?><br />
					          <?php echo $form['surface']->renderError() ?>
					          <?php echo $form['surface']->render(array('size' => '13')) ?><br />
			      			</div>
			      			<div style="float:left;">
			      				<?php echo $form['price']->renderLabel() ?><br />
					          <?php echo $form['price']->renderError() ?>
					          <?php echo $form['price']->render(array('size' => '13')) ?>
			      			</div>
			      			<div style="clear:both;"></div>
			      		</div>
			      		
			      		<div class="block">
			      			<?php echo $form['slug']->renderLabel() ?><br />
				          <?php echo $form['slug']->renderError() ?>
				          <?php echo $form['slug']->render(array('size' => '55')) ?><br />
				          
				          <?php echo $form['municipality']->renderLabel() ?><br />
				          <?php echo $form['municipality']->renderError() ?>
				          <?php echo $form['municipality']->render(array('size' => '55')) ?><br />
				          
				          <?php echo $form['address']->renderLabel() ?><br />
				          <?php echo $form['address']->renderError() ?>
				          <?php echo $form['address']->render(array('size' => '55')) ?><br />
				          
				          <?php echo $form['area']->renderLabel() ?><br />
				          <?php echo $form['area']->renderError() ?>
				          <?php echo $form['area']->render(array('size' => '55')) ?><br />
				          
				          <?php echo $form['state_id']->renderLabel(__('State')) ?><br />
				          <?php echo $form['state_id']->renderError() ?>
				          <?php echo $form['state_id'] ?><br />
				          
				          <?php echo $form['offer_id']->renderLabel(__('Offer')) ?><br />
				          <?php echo $form['offer_id']->renderError() ?>
				          <?php echo $form['offer_id'] ?><br />
				          
				          <?php echo $form['type_id']->renderLabel(__('Type')) ?><br />
				          <?php echo $form['type_id']->renderError() ?>
				          <?php echo $form['type_id'] ?><br />
				          
				          <?php echo $form['typology_id']->renderLabel(__('Typology')) ?><br />
				          <?php echo $form['typology_id']->renderError() ?>
				          <?php echo $form['typology_id'] ?><br />
				          
				          <?php echo $form['kitchen_id']->renderLabel(__('Kitchen')) ?><br />
				          <?php echo $form['kitchen_id']->renderError() ?>
				          <?php echo $form['kitchen_id'] ?><br />
				          
				          <?php echo $form['description']->renderLabel() ?><br />
				          <?php echo $form['description']->renderError() ?>
				          <?php echo $form['description']->render(array('cols' => '52', 'rows' => '10')) ?>
			      		</div>
			      		
			      		<div class="block">
			      			<?php echo $form['sf_asset_folder_id']->renderLabel(__('Images folder')) ?><br />
				          <?php echo $form['sf_asset_folder_id']->renderError() ?>
				          <?php echo $form['sf_asset_folder_id']->render(array('size' => '55')) ?>
			      		</div>
			      	</td>
			      	<td>
			      		<div class="block">
				          <?php echo $form['is_public']->renderError() ?>
				          <?php echo $form['is_public'] ?>
				          <?php echo $form['is_public']->renderLabel() ?><br />

				          <?php echo $form['has_priority']->renderError() ?>
				          <?php echo $form['has_priority'] ?>
				          <?php echo $form['has_priority']->renderLabel() ?>
			      		</div>
			      		
			      		<div class="block">
			      			<?php echo $form['floors']->renderLabel() ?><br />
				          <?php echo $form['floors']->renderError() ?>
				          <?php echo $form['floors']->render(array('size' => '55')) ?><br />
			        
			         		<?php echo $form['on_floor']->renderLabel() ?><br />
				          <?php echo $form['on_floor']->renderError() ?>
				          <?php echo $form['on_floor']->render(array('size' => '55')) ?>
			      		</div>
			      		
			      		<div class="block">
				          <?php echo $form['garden']->renderError() ?>
				          <?php echo $form['garden'] ?>
				          <?php echo $form['garden']->renderLabel() ?><br />
				          
				          <?php echo $form['livingroom']->renderError() ?>
				          <?php echo $form['livingroom'] ?>
									<?php echo $form['livingroom']->renderLabel() ?><br />
								
				          <?php echo $form['cellar']->renderError() ?>
				          <?php echo $form['cellar'] ?>
				          <?php echo $form['cellar']->renderLabel() ?><br />
				          
				          <?php echo $form['lift']->renderError() ?>
				          <?php echo $form['lift'] ?>
				     			<?php echo $form['lift']->renderLabel() ?><br />
			     			
				          <?php echo $form['attic']->renderError() ?>
				          <?php echo $form['attic'] ?>
									<?php echo $form['attic']->renderLabel() ?><br />
									
				          <?php echo $form['diningroom']->renderError() ?>
				          <?php echo $form['diningroom'] ?>
				          <?php echo $form['diningroom']->renderLabel() ?><br />
			      		</div>
			      		
			      		<div class="block">
			      			<?php echo $form['balcony']->renderLabel() ?><br />
				          <?php echo $form['balcony']->renderError() ?>
				          <?php echo $form['balcony']->render(array('size' => '55')) ?><br />
			        
				        	<?php echo $form['bath']->renderLabel() ?><br />
				          <?php echo $form['bath']->renderError() ?>
				          <?php echo $form['bath']->render(array('size' => '55')) ?><br />
			        
				        	<?php echo $form['bedroom']->renderLabel() ?><br />
				          <?php echo $form['bedroom']->renderError() ?>
				          <?php echo $form['bedroom']->render(array('size' => '55')) ?><br />
			        
				        	<?php echo $form['entrance']->renderLabel() ?><br />
				          <?php echo $form['entrance']->renderError() ?>
				          <?php echo $form['entrance']->render(array('size' => '55')) ?><br />
			        
				        	<?php echo $form['parking']->renderLabel() ?><br />
				          <?php echo $form['parking']->renderError() ?>
				          <?php echo $form['parking']->render(array('size' => '55')) ?><br />
				          
				          <?php echo $form['heating']->renderLabel() ?><br />
				          <?php echo $form['heating']->renderError() ?>
				          <?php echo $form['heating']->render(array('size' => '55')) ?>
			      		</div>
			      		
			      		<div class="block">
			      			<?php echo $form['created_at']->renderLabel() ?><br />
				          <?php echo $form['created_at']->renderError() ?>
				          <?php echo $form['created_at']->render(array('size' => '55')) ?><br />
			     				
				          <?php echo $form['updated_at']->renderLabel() ?><br />
			        		<?php echo $form['updated_at']->renderError() ?>
			          	<?php echo $form['updated_at']->render(array('size' => '55')) ?>
			      		</div>
			      	</td>
			      </tr>
			    </tbody>
			  </table>
			  <div class="footer">
					<?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('property/index') ?>" title="Cancel">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'property/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'title' => 'Delete')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" title="Save" />
				</div>
			</form>
		</div>
	</div>
</div>