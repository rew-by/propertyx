<?php
/**
 * This file is part of the propertyx package.
 * (c) 2009 Daniel Londero <daniel.londero@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * state actions.
 *
 * @package    propertyx
 * @subpackage state
 * @author     Daniel Londero <daniel.londero@gmail.com>
 */
class stateActions extends sfActions
{
  /**
   * Executes index action
   *
   * @param sfWebRequest $request
   */
	public function executeIndex(sfWebRequest $request)
  {
    $this->state_list = StatePeer::doSelect(new Criteria());
  }

  /**
   * Executes new action
   *
   * @param sfWebRequest $request
   */
  public function executeNew(sfWebRequest $request)
  {
    $this->form = new StateForm();
  }

  /**
   * Executes create action
   *
   * @param sfWebRequest $request
   */
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new StateForm();

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
    $this->forward404Unless($state = StatePeer::retrieveByPk($request->getParameter('id')), sprintf('Object state does not exist (%s).', $request->getParameter('id')));
    $this->form = new StateForm($state);
  }

  /**
   * Executes update action
   *
   * @param sfWebRequest $request
   */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($state = StatePeer::retrieveByPk($request->getParameter('id')), sprintf('Object state does not exist (%s).', $request->getParameter('id')));
    $this->form = new StateForm($state);

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

    $this->forward404Unless($state = StatePeer::retrieveByPk($request->getParameter('id')), sprintf('Object state does not exist (%s).', $request->getParameter('id')));
    $state->delete();

    $this->redirect('state/index');
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
      $state = $form->save();

      $this->redirect('state/edit?id='.$state->getId());
    }
  }
}
