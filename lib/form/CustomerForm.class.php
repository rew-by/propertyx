<?php

/**
 * Customer form.
 *
 * @package    propertyx
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class CustomerForm extends BaseCustomerForm
{
  public function configure()
  {
  	$this->widgetSchema['offer_id'] = new sfWidgetFormPropelChoice(array('model' => 'Offer', 'add_empty' => true));
  	$this->widgetSchema['type_id'] = new sfWidgetFormPropelChoice(array('model' => 'Type', 'add_empty' => true));
  	$this->widgetSchema['typology_id'] = new sfWidgetFormPropelChoice(array('model' => 'Typology', 'add_empty' => true));
  	$this->widgetSchema['created_at'] = new sfWidgetFormInput(array(), array('disabled' => true));
		$this->widgetSchema['updated_at'] = new sfWidgetFormInput(array(), array('disabled' => true));
  }
}
