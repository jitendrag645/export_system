<?php
App::uses('ProductVariety', 'Model');

/**
 * ProductVariety Test Case
 *
 */
class ProductVarietyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_variety',
		'app.product',
		'app.unit',
		'app.product_type',
		'app.user_enquiry',
		'app.season_crop'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductVariety = ClassRegistry::init('ProductVariety');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductVariety);

		parent::tearDown();
	}

}
