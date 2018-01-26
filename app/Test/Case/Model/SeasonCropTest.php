<?php
App::uses('SeasonCrop', 'Model');

/**
 * SeasonCrop Test Case
 *
 */
class SeasonCropTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.season_crop',
		'app.plot',
		'app.user',
		'app.lab',
		'app.product',
		'app.unit',
		'app.product_type',
		'app.user_enquiry',
		'app.product_variety'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SeasonCrop = ClassRegistry::init('SeasonCrop');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SeasonCrop);

		parent::tearDown();
	}

}
