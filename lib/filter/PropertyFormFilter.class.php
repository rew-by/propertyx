<?php
/**
 * This file is part of the propertyx package.
 * (c) 2009 Daniel Londero <daniel.londero@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Property filter form.
 *
 * @package    propertyx
 * @subpackage filter
 * @author     Daniel Londero <daniel.londero@gmail.com>
 */
class PropertyFormFilter extends BasePropertyFormFilter
{
  public function configure()
  {
  	$this->widgetSchema['municipality'] = new sfWidgetFormFilterInput(array('with_empty' => false));
  	$this->widgetSchema['price'] = new sfWidgetFormFilterInput(array('with_empty' => false));
  	
  	unset($this->widgetSchema['slug']);
  	unset($this->widgetSchema['address']);
  	unset($this->widgetSchema['area']);
  	unset($this->widgetSchema['description']);
  	unset($this->widgetSchema['year']);
  	unset($this->widgetSchema['floors']);
  	unset($this->widgetSchema['on_floor']);
  	unset($this->widgetSchema['surface']);
  	unset($this->widgetSchema['heating']);
  	unset($this->widgetSchema['garden']);
  	unset($this->widgetSchema['balcony']);
  	unset($this->widgetSchema['bath']);
  	unset($this->widgetSchema['bedroom']);
  	unset($this->widgetSchema['entrance']);
  	unset($this->widgetSchema['kitchen_id']);
  	unset($this->widgetSchema['diningroom']);
  	unset($this->widgetSchema['livingroom']);
  	unset($this->widgetSchema['cellar']);
  	unset($this->widgetSchema['lift']);
  	unset($this->widgetSchema['attic']);
  	unset($this->widgetSchema['parking']);
  	unset($this->widgetSchema['is_public']);
  	unset($this->widgetSchema['has_priority']);
  	unset($this->widgetSchema['sf_asset_folder_id']);
  	unset($this->widgetSchema['created_at']);
  	unset($this->widgetSchema['updated_at']);
  	
  	unset($this->validatorSchema['slug']);
  	unset($this->validatorSchema['address']);
  	unset($this->validatorSchema['area']);
  	unset($this->validatorSchema['description']);
  	unset($this->validatorSchema['floors']);
  	unset($this->validatorSchema['on_floor']);
  	unset($this->validatorSchema['surface']);
  	unset($this->validatorSchema['heating']);
  	unset($this->validatorSchema['garden']);
  	unset($this->validatorSchema['balcony']);
  	unset($this->validatorSchema['bath']);
  	unset($this->validatorSchema['bedroom']);
  	unset($this->validatorSchema['entrance']);
  	unset($this->validatorSchema['kitchen_id']);
  	unset($this->validatorSchema['diningroom']);
  	unset($this->validatorSchema['livingroom']);
  	unset($this->validatorSchema['cellar']);
  	unset($this->validatorSchema['lift']);
  	unset($this->validatorSchema['attic']);
  	unset($this->validatorSchema['parking']);
  	unset($this->validatorSchema['is_public']);
  	unset($this->validatorSchema['has_priority']);
  	unset($this->validatorSchema['sf_asset_folder_id']);
  	unset($this->validatorSchema['created_at']);
  	unset($this->validatorSchema['updated_at']);
  }
}
