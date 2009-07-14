<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new loggedInTestFunctional(new sfBrowser());

$browser->
	
	doLogin()->
	
  get('/customer/index')->

  with('request')->begin()->
    isParameter('module', 'customer')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/This is a temporary page/')->
    checkElement('h1', 'Customer List')->
    checkElement('a[title="New"]', 'New')->
  end()->
  
  click('New')->
	
	with('request')->begin()->
		isParameter('module', 'customer')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('form', 1)->
		checkElement('input[type="text"][name="customer[surname]"]', 1)->
		checkElement('input[type="text"][name="customer[name]"]', 1)->
		checkElement('input[type="text"][name="customer[municipality]"]', 1)->
		checkElement('input[type="text"][name="customer[address]"]', 1)->
		checkElement('input[type="text"][name="customer[zip]"]', 1)->
		checkElement('input[type="text"][name="customer[phone]"]', 1)->
		checkElement('input[type="text"][name="customer[mobile]"]', 1)->
		checkElement('input[type="text"][name="customer[created_at]"]', 1)->
		checkElement('input[type="text"][name="customer[updated_at]"]', 1)->
		checkElement('input[type="text"][name="customer[newmunicipality]"]', 1)->
		checkElement('select[name="customer[offer_id]"]', 1)->
		checkElement('select[name="customer[type_id]"]', 1)->
		checkElement('select[name="customer[typology_id]"]', 1)->
		checkElement('textarea[name="customer[description]"]', 1)->
		checkElement('input[type="text"][name="customer[maxprice]"]', 1)->
		checkElement('input[type="hidden"][name="customer[_csrf_token]"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(6)->
		isError('surname', 'required')->
		isError('name', 'required')->
		isError('maxprice', 'required')->
		isError('offer_id', 'required')->
		isError('type_id', 'required')->
		isError('typology_id', 'required')->
	end()->
	
	setField('customer[name]', 'Daniel')->
	setField('customer[surname]', 'Londero')->
	setField('customer[maxprice]', '200000')->
	setField('customer[offer_id]', '1')->
	setField('customer[type_id]', '1')->
	setField('customer[typology_id]', '1')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()->
	
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'customer')->
		isParameter('action', 'edit')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('a[title="Cancel"]', 1)->
		checkElement('a[title="Delete"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	setField('customer[name]', 'Daniel')->
	setField('customer[surname]', 'Londero')->
	setField('customer[maxprice]', '210000')->
	setField('customer[offer_id]', '1')->
	setField('customer[type_id]', '2')->
	setField('customer[typology_id]', '2')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()
;
