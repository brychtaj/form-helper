<?php 

namespace Brychtaj;

class Form extends FormFactory
{

	public static function field($name = null, $value = null)
	{
		echo self::render("text", "form-control", $name, $value);
	}

	public static function password()
	{
		echo self::render("password", "form-control", "password");
	}

	public static function submit($name = null, $value = "Odeslat")
	{
		echo self::render("submit", "btn", $name, $value);
	}
}