<?php
App::uses('Plot', 'Model');

/**
 * Plot Test Case
 *
 */
class PlotTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.plot',
		'app.user',
		'app.lab',
		'app.season_crop'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Plot = ClassRegistry::init('Plot');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plot);

		parent::tearDown();
	}

}
