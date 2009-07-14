<?php

/**
 * Customer form base class.
 *
 * @package    propertyx
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCustomerForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInput(),
      'surname'         => new sfWidgetFormInput(),
      'municipality'    => new sfWidgetFormInput(),
      'address'         => new sfWidgetFormInput(),
      'zip'             => new sfWidgetFormInput(),
      'phone'           => new sfWidgetFormInput(),
      'mobile'          => new sfWidgetFormInput(),
      'newmunicipality' => new sfWidgetFormInput(),
      'offer_id'        => new sfWidgetFormPropelChoice(array('model' => 'Offer', 'add_empty' => false)),
      'type_id'         => new sfWidgetFormPropelChoice(array('model' => 'Type', 'add_empty' => false)),
      'typology_id'     => new sfWidgetFormPropelChoice(array('model' => 'Typology', 'add_empty' => false)),
      'bedroom'         => new sfWidgetFormInput(),
      'bath'            => new sfWidgetFormInput(),
      'description'     => new sfWidgetFormTextarea(),
      'maxprice'        => new sfWidgetFormInput(),
      'is_active'       => new sfWidgetFormInputCheckbox(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Customer', 'column' => 'id', 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255)),
      'surname'         => new sfValidatorString(array('max_length' => 255)),
      'municipality'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'zip'             => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'phone'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mobile'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'newmunicipality' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'offer_id'        => new sfValidatorPropelChoice(array('model' => 'Offer', 'column' => 'id')),
      'type_id'         => new sfValidatorPropelChoice(array('model' => 'Type', 'column' => 'id')),
      'typology_id'     => new sfValidatorPropelChoice(array('model' => 'Typology', 'column' => 'id')),
      'bedroom'         => new sfValidatorInteger(array('required' => false)),
      'bath'            => new sfValidatorInteger(array('required' => false)),
      'description'     => new sfValidatorString(array('required' => false)),
      'maxprice'        => new sfValidatorNumber(),
      'is_active'       => new sfValidatorBoolean(),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customer';
  }


}
