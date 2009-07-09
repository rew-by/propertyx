<?php

/**
 * sfAsset form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasesfAssetForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'folder_id'   => new sfWidgetFormPropelChoice(array('model' => 'sfAssetFolder', 'add_empty' => false)),
      'filename'    => new sfWidgetFormInput(),
      'description' => new sfWidgetFormTextarea(),
      'author'      => new sfWidgetFormInput(),
      'copyright'   => new sfWidgetFormInput(),
      'type'        => new sfWidgetFormInput(),
      'filesize'    => new sfWidgetFormInput(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'sfAsset', 'column' => 'id', 'required' => false)),
      'folder_id'   => new sfValidatorPropelChoice(array('model' => 'sfAssetFolder', 'column' => 'id')),
      'filename'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'author'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'copyright'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'filesize'    => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'sfAsset', 'column' => array('folder_id', 'filename')))
    );

    $this->widgetSchema->setNameFormat('sf_asset[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfAsset';
  }


}
