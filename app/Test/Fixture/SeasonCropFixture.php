<?php
/**
 * SeasonCropFixture
 *
 */
class SeasonCropFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'plot_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'available_from' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'available_till' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'approximate_price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'is_active' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'plot_id' => 1,
			'user_id' => 1,
			'product_id' => 1,
			'available_from' => '2018-01-26 08:57:21',
			'available_till' => '2018-01-26 08:57:21',
			'approximate_price' => 1,
			'is_active' => 1,
			'created' => '2018-01-26 08:57:21',
			'modified' => '2018-01-26 08:57:21'
		),
	);

}
