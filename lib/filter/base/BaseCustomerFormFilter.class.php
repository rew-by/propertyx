<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Customer filter form base class.
 *
 * @package    propertyx
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCustomerFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(),
      'surname'         => new sfWidgetFormFilterInput(),
      'municipality'    => new sfWidgetFormFilterInput(),
      'address'         => new sfWidgetFormFilterInput(),
      'zip'             => new sfWidgetFormFilterInput(),
      'phone'           => new sfWidgetFormFilterInput(),
      'mobile'          => new sfWidgetFormFilterInput(),
      'newmunicipality' => new sfWidgetFormFilterInput(),
      'offer_id'        => new sfWidgetFormPropelChoice(array('model' => 'Offer', 'add_empty' => true)),
      'type_id'         => new sfWidgetFormPropelChoice(array('model' => 'Type', 'add_empty' => true)),
      'typology_id'     => new sfWidgetFormPropelChoice(array('model' => 'Typology', 'add_empty' => true)),
      'bedroom'         => new sfWidgetFormFilterInput(),
      'bath'            => new sfWidgetFormFilterInput(),
      'description'     => new sfWidgetFormFilterInput(),
      'maxprice'        => new sfWidgetFormFilterInput(),
      'is_active'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'surname'         => new sfValidatorPass(array('required' => false)),
      'municipality'    => new sfValidatorPass(array('required' => false)),
      'address'         => new sfValidatorPass(array('required' => false)),
      'zip'             => new sfValidatorPass(array('required' => false)),
      'phone'           => new sfValidatorPass(array('required' => false)),
      'mobile'          => new sfValidatorPass(array('required' => false)),
      'newmunicipality' => new sfValidatorPass(array('required' => false)),
      'offer_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Offer', 'column' => 'id')),
      'type_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Type', 'column' => 'id')),
      'typology_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Typology', 'column' => 'id')),
      'bedroom'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bath'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'     => new sfValidatorPass(array('required' => false)),
      'maxprice'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'is_active'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('customer_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customer';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'surname'         => 'Text',
      'municipality'    => 'Text',
      'address'         => 'Text',
      'zip'             => 'Text',
      'phone'           => 'Text',
      'mobile'          => 'Text',
      'newmunicipality' => 'Text',
      'offer_id'        => 'ForeignKey',
      'type_id'         => 'ForeignKey',
      'typology_id'     => 'ForeignKey',
      'bedroom'         => 'Number',
      'bath'            => 'Number',
      'description'     => 'Text',
      'maxprice'        => 'Number',
      'is_active'       => 'Boolean',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
