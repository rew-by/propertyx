<?php

/**
 * Class for logged in functional testing
 * @author Daniel Londero <daniel.londero@gmail.com>
 */
class loggedInTestFunctional extends sfTestFunctional
{
  /**
   * Does login
   * @param  string     $username
   * @param  string     $password
   * @return LoggedTest
   */
  public function doLogin($username = 'admin', $password = 'password')
  {
    return $this->
      info('login')->
      get('/property')->

      with('request')->begin()->
        isParameter('module', 'property')->
        isParameter('action', 'index')->
      end()->

      with('response')->begin()->
        isStatusCode(401)->
      end()->

      click('sign in', array('signin' => array(
        'username' => $username,
        'password' => $password,
        )))->
      with('request')->begin()->
        isParameter('module', 'sfGuardAuth')->
        isParameter('action', 'signin')->
      end()->

      isRedirected()->
      followRedirect()->
      with('response')->begin()->
        isStatusCode(200)->
      end();
  }
}
