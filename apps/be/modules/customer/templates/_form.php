<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div id="p_be_edit">
	<div class="table">
		<div class="body">
			<form action="<?php echo url_for('customer/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
			<?php if (!$form->getObject()->isNew()): ?>
			<input type="hidden" name="sf_method" value="put" />
			<?php endif; ?>
			  <table>
			    <tbody>
			      <?php echo $form->renderGlobalErrors() ?>
			      <tr>
			      	<td>
				      	<div class="block">
				      		<?php echo $form['surname']->renderLabel() ?><br />
				          <?php echo $form['surname']->renderError() ?>
				          <?php echo $form['surname']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['name']->renderLabel() ?><br />
				          <?php echo $form['name']->renderError() ?>
				          <?php echo $form['name']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['municipality']->renderLabel() ?><br />
				          <?php echo $form['municipality']->renderError() ?>
				          <?php echo $form['municipality']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['address']->renderLabel() ?><br />
				          <?php echo $form['address']->renderError() ?>
				          <?php echo $form['address']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['zip']->renderLabel() ?><br />
				          <?php echo $form['zip']->renderError() ?>
				          <?php echo $form['zip']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['phone']->renderLabel() ?><br />
				          <?php echo $form['phone']->renderError() ?>
				          <?php echo $form['phone']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['mobile']->renderLabel() ?><br />
				          <?php echo $form['mobile']->renderError() ?>
				          <?php echo $form['mobile']->render(array('class' => 'text')) ?><br />
				        </div>
				        <div class="block">
				          <?php echo $form['created_at']->renderLabel() ?><br />
				          <?php echo $form['created_at']->renderError() ?>
				          <?php echo $form['created_at']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['updated_at']->renderLabel() ?><br />
				          <?php echo $form['updated_at']->renderError() ?>
				          <?php echo $form['updated_at']->render(array('class' => 'text')) ?>
				        </div>
			        </td>
			        <td>
				        <div class="block">
				          <?php echo $form['newmunicipality']->renderLabel(__('New municipality')) ?><br />
				          <?php echo $form['newmunicipality']->renderError() ?>
				          <?php echo $form['newmunicipality']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['offer_id']->renderLabel(__('Offer')) ?><br />
				          <?php echo $form['offer_id']->renderError() ?>
				          <?php echo $form['offer_id'] ?><br />
				          
				          <?php echo $form['type_id']->renderLabel(__('Type')) ?><br />
				          <?php echo $form['type_id']->renderError() ?>
				          <?php echo $form['type_id'] ?><br />
				          
				          <?php echo $form['typology_id']->renderLabel(__('Typology')) ?><br />
				          <?php echo $form['typology_id']->renderError() ?>
				          <?php echo $form['typology_id'] ?><br />
				          
				          <?php echo $form['bedroom']->renderLabel() ?><br />
				          <?php echo $form['bedroom']->renderError() ?>
				          <?php echo $form['bedroom']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['bath']->renderLabel() ?><br />
				          <?php echo $form['bath']->renderError() ?>
				          <?php echo $form['bath']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['description']->renderLabel() ?><br />
				          <?php echo $form['description']->renderError() ?>
				          <?php echo $form['description']->render(array('class' => 'textarea')) ?><br />
				          
				          <?php echo $form['maxprice']->renderLabel() ?><br />
				          <?php echo $form['maxprice']->renderError() ?>
				          <?php echo $form['maxprice']->render(array('class' => 'text')) ?><br />
				          
				          <?php echo $form['is_active']->renderError() ?>
				          <?php echo $form['is_active'] ?>
				          <?php echo $form['is_active']->renderLabel() ?>
				      	</div>
							</td>
			      </tr>
			    </tbody>
			  </table>
        <div class="footer">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('customer/index') ?>" title="Cancel">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'customer/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'title' => 'Delete')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" title="Save" class="submit" />
        </div>
			</form>
		</div>
	</div>
</div>