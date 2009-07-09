<?php
/**
 * This file is part of the propertyx package.
 * (c) 2009 Daniel Londero <daniel.londero@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Property model peer.
 *
 * @package    propertyx
 * @subpackage lib.model
 * @author     Daniel Londero <daniel.londero@gmail.com>
 */
class PropertyPeer extends BasePropertyPeer
{
	static public function retrieveMunicipality($text, $limit)
	{
		$criteria = new Criteria();
		$criteria->add(PropertyPeer::MUNICIPALITY, '%'.$text.'%', Criteria::LIKE);
		$criteria->addAscendingOrderByColumn(PropertyPeer::MUNICIPALITY);
		$criteria->setLimit($limit);
		
		$municipalities = array();
    foreach (PropertyPeer::doSelect($criteria) as $property)
    {
      $municipalities[$property->getMunicipality()] = (string) $property->getMunicipality();
    }
 
    return $municipalities;
	}
}
