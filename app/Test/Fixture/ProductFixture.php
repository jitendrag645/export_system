<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'product_name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'minimum_order' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'unit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'product_name' => 1,
			'description' => 1,
			'minimum_order' => 1,
			'unit_id' => 1,
			'created' => '2018-01-26 08:55:03',
			'modified' => '2018-01-26 08:55:03'
		),
	);

}
