<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new loggedInTestFunctional(new sfBrowser());

$browser->
	
	doLogin()->
	
  get('/type/index')->

  with('request')->begin()->
    isParameter('module', 'type')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/This is a temporary page/')->
    checkElement('h1', 'Type List')->
    checkElement('a[title="New"]', 'New')->
  end()->
  
  click('New')->
	
	with('request')->begin()->
		isParameter('module', 'type')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('form', 1)->
		checkElement('input[type="text"][name="type[name]"]', 1)->
		checkElement('input[type="hidden"][name="type[_csrf_token]"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(1)->
		isError('name', 'required')->
	end()->
	
	setField('type[name]', 'A new name')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()->
	
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'type')->
		isParameter('action', 'edit')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('a[title="Cancel"]', 1)->
		checkElement('a[title="Delete"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	setField('type[name]', 'A modified name')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()
;
