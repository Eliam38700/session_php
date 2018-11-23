<?php

class Utilities
{

	public static function display_error_message($key, $errors)
	{
		if ( array_key_exists($key, $errors ) )
		{
			echo $errors[$key];
		}
	}
}