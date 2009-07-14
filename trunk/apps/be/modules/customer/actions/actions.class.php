<?php

/**
 * customer actions.
 *
 * @package    propertyx
 * @subpackage customer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class customerActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfWebRequest $request
	 */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->customer_list = CustomerPeer::doSelect(new Criteria());
    
  	$this->sort = $this->getRequestParameter('sort');
  	$this->sort_type = $this->getRequestParameter('sort_type');
  	
  	$criteria = new Criteria();
  	
  	if (!is_null($this->sort))
  	{
  		if (!is_null($this->sort_type) && $this->sort_type == 'desc')
  		{
  			$criteria->addDescendingOrderByColumn(CustomerPeer::$this->sort);
  		}
  		elseif (!is_null($this->sort_type) && $this->sort_type == 'asc')
  		{
  			$criteria->addAscendingOrderByColumn(CustomerPeer::$this->sort);
  		}
  	}
  	
    $pager = new sfPropelPager('Customer', sfConfig::get('app_max_customer_list', 20));
  	$pager->setPeerMethod('doSelect');
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
    $this->form = new CustomerForm();
  }

  /**
   * Executes create action
   *
   * @param sfWebRequest $request
   */
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new CustomerForm();

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
    $this->forward404Unless($customer = CustomerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object customer does not exist (%s).', $request->getParameter('id')));
    $this->form = new CustomerForm($customer);
  }

  /**
   * Executes update action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($customer = CustomerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object customer does not exist (%s).', $request->getParameter('id')));
    $this->form = new CustomerForm($customer);

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

    $this->forward404Unless($customer = CustomerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object customer does not exist (%s).', $request->getParameter('id')));
    $customer->delete();

    $this->redirect('customer/index');
  }

  /**
   * Checks if the form is valid and redirect to the right page
   *
   * @param sfWebRequest $request
   * @param sfForm $form
   */
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $customer = $form->save();

      $this->redirect('customer/edit?id='.$customer->getId());
    }
  }
}
