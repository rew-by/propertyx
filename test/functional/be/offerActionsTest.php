<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new loggedInTestFunctional(new sfBrowser());

$browser->
	
	doLogin()->
	
  get('/offer/index')->

  with('request')->begin()->
    isParameter('module', 'offer')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/This is a temporary page/')->
    checkElement('h1', 'Offer List')->
    checkElement('a[title="New"]', 'New')->
  end()->
  
  click('New')->
	
	with('request')->begin()->
		isParameter('module', 'offer')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('form', 1)->
		checkElement('input[type="text"][name="offer[name]"]', 1)->
		checkElement('input[type="hidden"][name="offer[_csrf_token]"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(1)->
		isError('name', 'required')->
	end()->
	
	setField('offer[name]', 'A new name')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()->
	
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'offer')->
		isParameter('action', 'edit')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('a[title="Cancel"]', 1)->
		checkElement('a[title="Delete"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	setField('offer[name]', 'A modified name')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()
;
