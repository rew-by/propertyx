<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Property filter form base class.
 *
 * @package    propertyx
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasePropertyFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'slug'               => new sfWidgetFormFilterInput(),
      'municipality'       => new sfWidgetFormFilterInput(),
      'address'            => new sfWidgetFormFilterInput(),
      'area'               => new sfWidgetFormFilterInput(),
      'offer_id'           => new sfWidgetFormPropelChoice(array('model' => 'Offer', 'add_empty' => true)),
      'type_id'            => new sfWidgetFormPropelChoice(array('model' => 'Type', 'add_empty' => true)),
      'typology_id'        => new sfWidgetFormPropelChoice(array('model' => 'Typology', 'add_empty' => true)),
      'description'        => new sfWidgetFormFilterInput(),
      'state_id'           => new sfWidgetFormPropelChoice(array('model' => 'State', 'add_empty' => true)),
      'year'               => new sfWidgetFormFilterInput(),
      'floors'             => new sfWidgetFormFilterInput(),
      'on_floor'           => new sfWidgetFormFilterInput(),
      'surface'            => new sfWidgetFormFilterInput(),
      'heating'            => new sfWidgetFormFilterInput(),
      'garden'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'balcony'            => new sfWidgetFormFilterInput(),
      'bath'               => new sfWidgetFormFilterInput(),
      'bedroom'            => new sfWidgetFormFilterInput(),
      'entrance'           => new sfWidgetFormFilterInput(),
      'kitchen_id'         => new sfWidgetFormPropelChoice(array('model' => 'Kitchen', 'add_empty' => true)),
      'diningroom'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'livingroom'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cellar'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'lift'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'attic'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'parking'            => new sfWidgetFormFilterInput(),
      'price'              => new sfWidgetFormFilterInput(),
      'is_public'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'has_priority'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sf_asset_folder_id' => new sfWidgetFormPropelChoice(array('model' => 'sfAssetFolder', 'add_empty' => true)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'slug'               => new sfValidatorPass(array('required' => false)),
      'municipality'       => new sfValidatorPass(array('required' => false)),
      'address'            => new sfValidatorPass(array('required' => false)),
      'area'               => new sfValidatorPass(array('required' => false)),
      'offer_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Offer', 'column' => 'id')),
      'type_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Type', 'column' => 'id')),
      'typology_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Typology', 'column' => 'id')),
      'description'        => new sfValidatorPass(array('required' => false)),
      'state_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'State', 'column' => 'id')),
      'year'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'floors'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'on_floor'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'surface'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'heating'            => new sfValidatorPass(array('required' => false)),
      'garden'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'balcony'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bath'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bedroom'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'entrance'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kitchen_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Kitchen', 'column' => 'id')),
      'diningroom'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'livingroom'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cellar'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'lift'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'attic'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'parking'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'is_public'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'has_priority'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sf_asset_folder_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfAssetFolder', 'column' => 'id')),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('property_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Property';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'slug'               => 'Text',
      'municipality'       => 'Text',
      'address'            => 'Text',
      'area'               => 'Text',
      'offer_id'           => 'ForeignKey',
      'type_id'            => 'ForeignKey',
      'typology_id'        => 'ForeignKey',
      'description'        => 'Text',
      'state_id'           => 'ForeignKey',
      'year'               => 'Number',
      'floors'             => 'Number',
      'on_floor'           => 'Number',
      'surface'            => 'Number',
      'heating'            => 'Text',
      'garden'             => 'Boolean',
      'balcony'            => 'Number',
      'bath'               => 'Number',
      'bedroom'            => 'Number',
      'entrance'           => 'Number',
      'kitchen_id'         => 'ForeignKey',
      'diningroom'         => 'Boolean',
      'livingroom'         => 'Boolean',
      'cellar'             => 'Boolean',
      'lift'               => 'Boolean',
      'attic'              => 'Boolean',
      'parking'            => 'Number',
      'price'              => 'Number',
      'is_public'          => 'Boolean',
      'has_priority'       => 'Boolean',
      'sf_asset_folder_id' => 'ForeignKey',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
