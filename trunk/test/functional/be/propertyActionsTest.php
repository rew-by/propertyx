<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

$browser = new loggedInTestFunctional(new sfBrowser());

$browser->
	
	doLogin()->
	
  get('/property/index')->

  with('request')->begin()->
    isParameter('module', 'property')->
    isParameter('action', 'index')->
  end()->

  with('response')->begin()->
    isStatusCode(200)->
    checkElement('body', '!/This is a temporary page/')->
    checkElement('h1', 'Property List')->
    checkElement('a[title="New"]', 'New')->
  end()->
  
  click('New')->
	
	with('request')->begin()->
		isParameter('module', 'property')->
		isParameter('action', 'new')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('form', 1)->
		checkElement('input[type="text"][name="property[year]"]', 1)->
		checkElement('input[type="text"][name="property[surface]"]', 1)->
		checkElement('input[type="text"][name="property[price]"]', 1)->
		checkElement('input[type="text"][name="property[slug]"]', 1)->
		checkElement('input[type="hidden"][name="property[municipality]"]', 1)->
		checkElement('input[type="text"][name="autocomplete_property[municipality]"]', 1)->
		checkElement('input[type="text"][name="property[address]"]', 1)->
		checkElement('input[type="text"][name="property[area]"]', 1)->
		checkElement('select[name="property[state_id]"]', 1)->
		checkElement('select[name="property[offer_id]"]', 1)->
		checkElement('select[name="property[type_id]"]', 1)->
		checkElement('select[name="property[typology_id]"]', 1)->
		checkElement('select[name="property[kitchen_id]"]', 1)->
		checkElement('textarea[name="property[description]"]', 1)->
		checkElement('input[type="hidden"][name="property[sf_asset_folder_id]"]', 1)->
		checkElement('input[type="text"][name="autocomplete_property[sf_asset_folder_id]"]', 1)->
		checkElement('input[type="checkbox"][name="property[is_public]"]', 1)->
		checkElement('input[type="checkbox"][name="property[has_priority]"]', 1)->
		checkElement('input[type="text"][name="property[floors]"]', 1)->
		checkElement('input[type="text"][name="property[on_floor]"]', 1)->
		checkElement('input[type="checkbox"][name="property[garden]"]', 1)->
		checkElement('input[type="checkbox"][name="property[livingroom]"]', 1)->
		checkElement('input[type="checkbox"][name="property[cellar]"]', 1)->
		checkElement('input[type="checkbox"][name="property[lift]"]', 1)->
		checkElement('input[type="checkbox"][name="property[attic]"]', 1)->
		checkElement('input[type="checkbox"][name="property[diningroom]"]', 1)->
		checkElement('input[type="text"][name="property[balcony]"]', 1)->
		checkElement('input[type="text"][name="property[bath]"]', 1)->
		checkElement('input[type="text"][name="property[bedroom]"]', 1)->
		checkElement('input[type="text"][name="property[entrance]"]', 1)->
		checkElement('input[type="text"][name="property[parking]"]', 1)->
		checkElement('input[type="text"][name="property[heating]"]', 1)->
		checkElement('input[type="text"][name="property[created_at]"]', 1)->
		checkElement('input[type="text"][name="property[updated_at]"]', 1)->
		checkElement('input[type="hidden"][name="property[_csrf_token]"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(8)->
		isError('surface', 'required')->
		isError('municipality', 'required')->
		isError('description', 'required')->
		isError('offer_id', 'required')->
		isError('type_id', 'required')->
		isError('state_id', 'required')->
		isError('typology_id', 'required')->
		isError('kitchen_id', 'required')->
	end()->
	
	setField('property[surface]', '100')->
	setField('autocomplete_property[municipality]', 'Udine')->
	setField('property[description]', 'Bellissimo appartamento...')->
	setField('property[offer_id]', '1')->
	setField('property[type_id]', '1')->
	setField('property[state_id]', '1')->
	setField('property[typology_id]', '1')->
	setField('property[kitchen_id]', '1')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()->
	
	followRedirect()->
	
	with('request')->begin()->
		isParameter('module', 'property')->
		isParameter('action', 'edit')->
	end()->
	
	with('response')->begin()->
		isStatusCode(200)->
		checkElement('a[title="Cancel"]', 1)->
		checkElement('a[title="Delete"]', 1)->
		checkElement('input[type="submit"][title="Save"]', 1)->
	end()->
	
	setField('property[surface]', '120')->
	setField('autocomplete_property[municipality]', 'Milano')->
	setField('property[description]', 'Bellissimo nuovo appartamento...')->
	setField('property[offer_id]', '2')->
	setField('property[type_id]', '2')->
	setField('property[state_id]', '2')->
	setField('property[typology_id]', '2')->
	setField('property[kitchen_id]', '2')->
	
	click('Save')->
	
	with('form')->begin()->
		hasErrors(0)->
	end()
;
