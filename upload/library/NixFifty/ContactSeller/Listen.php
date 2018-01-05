<?php

class NixFifty_ContactSeller_Listen
{
	public static function loadClass($class, array &$extend)
	{
		$extend[] = 'NixFifty_ContactSeller_' . $class;
	}
}