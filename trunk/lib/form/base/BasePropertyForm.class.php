<?php

/**
 * Property form base class.
 *
 * @package    propertyx
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePropertyForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'slug'               => new sfWidgetFormInput(),
      'municipality'       => new sfWidgetFormInput(),
      'address'            => new sfWidgetFormInput(),
      'area'               => new sfWidgetFormInput(),
      'offer_id'           => new sfWidgetFormPropelChoice(array('model' => 'Offer', 'add_empty' => false)),
      'type_id'            => new sfWidgetFormPropelChoice(array('model' => 'Type', 'add_empty' => false)),
      'typology_id'        => new sfWidgetFormPropelChoice(array('model' => 'Typology', 'add_empty' => false)),
      'description'        => new sfWidgetFormTextarea(),
      'state_id'           => new sfWidgetFormPropelChoice(array('model' => 'State', 'add_empty' => false)),
      'year'               => new sfWidgetFormInput(),
      'floors'             => new sfWidgetFormInput(),
      'on_floor'           => new sfWidgetFormInput(),
      'surface'            => new sfWidgetFormInput(),
      'heating'            => new sfWidgetFormInput(),
      'garden'             => new sfWidgetFormInputCheckbox(),
      'balcony'            => new sfWidgetFormInput(),
      'bath'               => new sfWidgetFormInput(),
      'bedroom'            => new sfWidgetFormInput(),
      'entrance'           => new sfWidgetFormInput(),
      'kitchen_id'         => new sfWidgetFormPropelChoice(array('model' => 'Kitchen', 'add_empty' => false)),
      'diningroom'         => new sfWidgetFormInputCheckbox(),
      'livingroom'         => new sfWidgetFormInputCheckbox(),
      'cellar'             => new sfWidgetFormInputCheckbox(),
      'lift'               => new sfWidgetFormInputCheckbox(),
      'attic'              => new sfWidgetFormInputCheckbox(),
      'parking'            => new sfWidgetFormInput(),
      'price'              => new sfWidgetFormInput(),
      'is_public'          => new sfWidgetFormInputCheckbox(),
      'has_priority'       => new sfWidgetFormInputCheckbox(),
      'sf_asset_folder_id' => new sfWidgetFormPropelChoice(array('model' => 'sfAssetFolder', 'add_empty' => true)),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorPropelChoice(array('model' => 'Property', 'column' => 'id', 'required' => false)),
      'slug'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'municipality'       => new sfValidatorString(array('max_length' => 255)),
      'address'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'area'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'offer_id'           => new sfValidatorPropelChoice(array('model' => 'Offer', 'column' => 'id')),
      'type_id'            => new sfValidatorPropelChoice(array('model' => 'Type', 'column' => 'id')),
      'typology_id'        => new sfValidatorPropelChoice(array('model' => 'Typology', 'column' => 'id')),
      'description'        => new sfValidatorString(),
      'state_id'           => new sfValidatorPropelChoice(array('model' => 'State', 'column' => 'id')),
      'year'               => new sfValidatorInteger(array('required' => false)),
      'floors'             => new sfValidatorInteger(array('required' => false)),
      'on_floor'           => new sfValidatorInteger(array('required' => false)),
      'surface'            => new sfValidatorNumber(),
      'heating'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'garden'             => new sfValidatorBoolean(array('required' => false)),
      'balcony'            => new sfValidatorInteger(array('required' => false)),
      'bath'               => new sfValidatorInteger(array('required' => false)),
      'bedroom'            => new sfValidatorInteger(array('required' => false)),
      'entrance'           => new sfValidatorInteger(array('required' => false)),
      'kitchen_id'         => new sfValidatorPropelChoice(array('model' => 'Kitchen', 'column' => 'id')),
      'diningroom'         => new sfValidatorBoolean(array('required' => false)),
      'livingroom'         => new sfValidatorBoolean(array('required' => false)),
      'cellar'             => new sfValidatorBoolean(array('required' => false)),
      'lift'               => new sfValidatorBoolean(array('required' => false)),
      'attic'              => new sfValidatorBoolean(array('required' => false)),
      'parking'            => new sfValidatorInteger(array('required' => false)),
      'price'              => new sfValidatorNumber(),
      'is_public'          => new sfValidatorBoolean(),
      'has_priority'       => new sfValidatorBoolean(array('required' => false)),
      'sf_asset_folder_id' => new sfValidatorPropelChoice(array('model' => 'sfAssetFolder', 'column' => 'id', 'required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'updated_at'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('property[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Property';
  }


}
