<?php
/**
 * This file is part of the propertyx package.
 * (c) 2009 Daniel Londero <daniel.londero@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * offer actions.
 *
 * @package    propertyx
 * @subpackage offer
 * @author     Daniel Londero <daniel.londero@gmail.com>
 */
class offerActions extends sfActions
{
	/**
	 * Executes index action
	 *
	 * @param sfWebRequest $request
	 */
  public function executeIndex(sfWebRequest $request)
  {
    $this->offer_list = OfferPeer::doSelect(new Criteria());
  }

  /**
   * Executes new action
   *
   * @param sfWebRequest $request
   */
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new OfferForm();
  }

  /**
   * Executes create action
   *
   * @param sfWebRequest $request
   */
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new OfferForm();

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
    $this->forward404Unless($offer = OfferPeer::retrieveByPk($request->getParameter('id')), sprintf('Object offer does not exist (%s).', $request->getParameter('id')));
    $this->form = new OfferForm($offer);
  }

  /**
   * Executes update action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($offer = OfferPeer::retrieveByPk($request->getParameter('id')), sprintf('Object offer does not exist (%s).', $request->getParameter('id')));
    $this->form = new OfferForm($offer);

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

    $this->forward404Unless($offer = OfferPeer::retrieveByPk($request->getParameter('id')), sprintf('Object offer does not exist (%s).', $request->getParameter('id')));
    $offer->delete();

    $this->redirect('offer/index');
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
      $offer = $form->save();

      $this->redirect('offer/edit?id='.$offer->getId());
    }
  }
}
