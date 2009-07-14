<?php
/**
 * This file is part of the propertyx package.
 * (c) 2009 Daniel Londero <daniel.londero@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Property form.
 *
 * @package    propertyx
 * @subpackage form
 * @author     Daniel Londero <daniel.londero@gmail.com>
 */
class PropertyForm extends BasePropertyForm
{
  public function configure()
  {
  	$this->widgetSchema['municipality'] = new sfWidgetFormChoice(array('choices' => array())); 
  	$this->widgetSchema['municipality']->setOption('renderer_class', 'sfWidgetFormJQueryAutocompleter');
		$this->widgetSchema['municipality']->setOption('renderer_options', array(
		  'url'   => $this->getOption('municipality'),
		));
		$this->widgetSchema['sf_asset_folder_id']->setOption('renderer_class', 'sfWidgetFormPropelJQueryAutocompleter');
		$this->widgetSchema['sf_asset_folder_id']->setOption('renderer_options', array(
		  'model' => 'sfAssetFolder',
		  'url'   => $this->getOption('images'),
		));
		$this->widgetSchema['state_id'] = new sfWidgetFormPropelChoice(array('model' => 'State', 'add_empty' => true));
		$this->widgetSchema['offer_id'] = new sfWidgetFormPropelChoice(array('model' => 'Offer', 'add_empty' => true));
  	$this->widgetSchema['type_id'] = new sfWidgetFormPropelChoice(array('model' => 'Type', 'add_empty' => true));
  	$this->widgetSchema['typology_id'] = new sfWidgetFormPropelChoice(array('model' => 'Typology', 'add_empty' => true));
  	$this->widgetSchema['kitchen_id'] = new sfWidgetFormPropelChoice(array('model' => 'Kitchen', 'add_empty' => true));
		$this->widgetSchema['created_at'] = new sfWidgetFormInput(array(), array('disabled' => true));
		$this->widgetSchema['updated_at'] = new sfWidgetFormInput(array(), array('disabled' => true));
  }
}
