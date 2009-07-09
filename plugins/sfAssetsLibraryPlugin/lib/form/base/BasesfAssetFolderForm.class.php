<?php

/**
 * sfAssetFolder form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BasesfAssetFolderForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'tree_left'     => new sfWidgetFormInput(),
      'tree_right'    => new sfWidgetFormInput(),
      'name'          => new sfWidgetFormInput(),
      'relative_path' => new sfWidgetFormInput(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorPropelChoice(array('model' => 'sfAssetFolder', 'column' => 'id', 'required' => false)),
      'tree_left'     => new sfValidatorInteger(),
      'tree_right'    => new sfValidatorInteger(),
      'name'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'relative_path' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
      'updated_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'sfAssetFolder', 'column' => array('relative_path')))
    );

    $this->widgetSchema->setNameFormat('sf_asset_folder[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfAssetFolder';
  }


}
