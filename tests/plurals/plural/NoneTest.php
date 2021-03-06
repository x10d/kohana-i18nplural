<?php
/**
 * None plurals test
 * 
 * @package    Plurals
 * @category   Unit tests
 * @author     Korney Czukowski
 * @copyright  (c) 2011 Korney Czukowski
 * @license    MIT License
 * 
 * Test Rules:
 *  other → everything		0-999; 1.31...
 * 
 * @group plurals
 * @group plurals.rules
 */
class I18n_Plural_None_Test extends I18n_Unittest_Plural
{
	/**
	 * return  array
	 */
	public function provider_counts()
	{
		return array(
			array(0, 'other'),
			array(301, 'other'),
			array(999, 'other'),
			array(1.31, 'other'),
		);
	}
}
