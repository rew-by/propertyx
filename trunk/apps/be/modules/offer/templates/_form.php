<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<div id="p_be_edit">
	<div class="table">
		<div class="body">
			<form action="<?php echo url_for('offer/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
			<?php if (!$form->getObject()->isNew()): ?>
			<input type="hidden" name="sf_method" value="put" />
			<?php endif; ?>
			  <table>
			    <tbody>
			      <?php echo $form->renderGlobalErrors() ?>
			      <tr>
			        <td>
			        	<div class="block">
				      		<?php echo $form['name']->renderLabel() ?><br />
				          <?php echo $form['name']->renderError() ?>
				          <?php echo $form['name'] ?>
			          </div>
			        </td>
			      </tr>
			    </tbody>
			  </table>
			  <div class="footer">
				  <?php echo $form->renderHiddenFields() ?>
		       &nbsp;<a href="<?php echo url_for('offer/index') ?>" title="Cancel">Cancel</a>
		       <?php if (!$form->getObject()->isNew()): ?>
		         &nbsp;<?php echo link_to('Delete', 'offer/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'title' => 'Delete')) ?>
		       <?php endif; ?>
		       <input type="submit" value="Save" title="Save" />
			  </div>
			</form>
		</div>
	</div>
</div>