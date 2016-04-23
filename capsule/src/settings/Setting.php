<?php namespace Capsule\Settings;
/**
 * Setting Environtment here
 *
 * Author : Muhamad Reza Abdul Rohim <reza.wikrama3@gmailc.com>
 * 
 */

class Setting
{

	public function __construct()
	{

	}

	public function attribute($attribute)
	{
		return config('setting.'.$attribute);
	}
}