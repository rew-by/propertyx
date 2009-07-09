<?php
/**
 * This file is part of the propertyx package.
 * (c) 2009 Daniel Londero <daniel.londero@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * property actions.
 *
 * @package    propertyx
 * @subpackage property
 * @author     Daniel Londero <daniel.londero@gmail.com>
 */
class propertyActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfWebRequest $request
   */
	public function executeIndex(sfWebRequest $request)
  {
  	$this->filter = new PropertyFormFilter();  	
  	
  	//$this->property_list = PropertyPeer::doSelect(new Criteria());
  	
  	$this->sort = $this->getRequestParameter('sort');
  	$this->sort_type = $this->getRequestParameter('sort_type');
  	
  	$criteria = new Criteria();
  	
  	if (!is_null($this->sort))
  	{
  		if (!is_null($this->sort_type) && $this->sort_type == 'desc')
  		{
  			$criteria->addDescendingOrderByColumn(PropertyPeer::$this->sort);
  		}
  		elseif (!is_null($this->sort_type) && $this->sort_type == 'asc')
  		{
  			$criteria->addAscendingOrderByColumn(PropertyPeer::$this->sort);
  		}
  	}
		
  	if ($request->hasParameter('property_filters'))
    {
      $property_filters = $request->getParameter('property_filters');
      $this->filter->bind($property_filters);

      if ($this->filter->isValid())
      {
      	!empty($property_filters['municipality']['text']) ? $criteria->add(PropertyPeer::MUNICIPALITY, "%".$property_filters['municipality']['text']."%", Criteria::LIKE) : null;
      	!empty($property_filters['offer_id']) ? $criteria->add(PropertyPeer::OFFER_ID, $property_filters['offer_id']) : null;
      	!empty($property_filters['type_id']) ? $criteria->add(PropertyPeer::TYPE_ID, $property_filters['type_id']) : null;
      	!empty($property_filters['typology_id']) ? $criteria->add(PropertyPeer::TYPOLOGY_ID, $property_filters['typology_id']) : null;
      	!empty($property_filters['state_id']) ? $criteria->add(PropertyPeer::STATE_ID, $property_filters['state_id']) : null;
      	!empty($property_filters['price']['text']) ? $criteria->add(PropertyPeer::PRICE, $property_filters['price']['text'], Criteria::LESS_EQUAL) : null;
      }
    }
  	
  	$pager = new sfPropelPager('Property', sfConfig::get('app_max_propertyes_list', 20));
  	$pager->setPeerMethod('doSelectJoinAll');
		$pager->setCriteria($criteria);
		$pager->setPage($this->getRequestParameter('page', 1));
		$pager->init();
		$this->pager = $pager;
  }
	
  /**
   * Executes new action
   *
   * @param sfWebRequest $request
   */
  public function executeNew(sfWebRequest $request)
  {
  	$property = new Property();
    $this->form = new PropertyForm($property, array('url' => $this->getController()->genUrl('property/ajax')));
  }
	
  /**
   * Executes create action
   *
   * @param sfWebRequest $request
   */
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new PropertyForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
	
  /**
   * Executes edit action
   *
   * @param sfWebRequest $request
   */
  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($property = PropertyPeer::retrieveByPk($request->getParameter('id')), sprintf('Object property does not exist (%s).', $request->getParameter('id')));
    $this->form = new PropertyForm($property, array('images' => $this->getController()->genUrl('property/ImagesAjax'), 'municipality' => $this->getController()->genUrl('property/municipalityAjax')));
  }
	
  /**
   * Executes update action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($property = PropertyPeer::retrieveByPk($request->getParameter('id')), sprintf('Object property does not exist (%s).', $request->getParameter('id')));
    $this->form = new PropertyForm($property);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  /**
   * Executes delete action
   *
   * @param sfWebRequest $request
   */
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($property = PropertyPeer::retrieveByPk($request->getParameter('id')), sprintf('Object property does not exist (%s).', $request->getParameter('id')));
    $property->delete();

    $this->redirect('property/index');
  }
	
  /**
   * Checks if the form is valid and redirect to the right page
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
  	$autocomplete = $request->getParameter('autocomplete_property');
    
    $formArray = $request->getParameter($form->getName());
  	$formArray['municipality'] = $autocomplete['municipality'];
  	
  	$form->bind($formArray, $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $property = $form->save();

      $this->redirect('property/edit?id='.$property->getId());
    }
  }
  
  /**
   * Ajax for municipality field
   *
   * @param sfWebRequest $request
   * @return string
   */
	public function executeMunicipalityAjax(sfWebRequest $request)
	{
	  $this->getResponse()->setContentType('application/json');
	 
	  $municipality = PropertyPeer::retrieveMunicipality($request->getParameter('text'), $request->getParameter('limit'));
	 
	  return $this->renderText(json_encode($municipality));
	}
  
  /**
   * Ajax for images folder select
   *
   * @param sfWebRequest $request
   * @return string
   */
	public function executeImagesAjax(sfWebRequest $request)
	{
	  $this->getResponse()->setContentType('application/json');
	 
	  $folders = sfAssetFolderPeer::retrieveByPathForSelect($request->getParameter('path'), $request->getParameter('limit'));
	 
	  return $this->renderText(json_encode($folders));
	}
}
