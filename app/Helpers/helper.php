<?php 



function helpBlock($errors,$name)
{
	if($errors->has($name))
	return "<span class='help-block text-red'>" . $errors->first($name) . "</span>";
}

function menuActivator($name)
{
	if( Route::currentRouteName() == $name )
	return 'active';
	else
	return '';
}