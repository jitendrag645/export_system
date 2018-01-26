<?php
App::uses('UserEnquiry', 'Model');

/**
 * UserEnquiry Test Case
 *
 */
class UserEnquiryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_enquiry',
		'app.product',
		'app.unit',
		'app.product_type',
		'app.product_variety',
		'app.season_crop',
		'app.email'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserEnquiry = ClassRegistry::init('UserEnquiry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserEnquiry);

		parent::tearDown();
	}

}
