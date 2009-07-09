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
		$this->widgetSchema['created_at'] = new sfWidgetFormInput(array(), array('disabled' => true));
		$this->widgetSchema['updated_at'] = new sfWidgetFormInput(array(), array('disabled' => true));
  }
}
