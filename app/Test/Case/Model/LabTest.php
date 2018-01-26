<?php
App::uses('Lab', 'Model');

/**
 * Lab Test Case
 *
 */
class LabTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lab',
		'app.user',
		'app.plot',
		'app.season_crop'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lab = ClassRegistry::init('Lab');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lab);

		parent::tearDown();
	}

}
