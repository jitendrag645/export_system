<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lastname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobile' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
		'role' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
		'registrationid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address1' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address2' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pincode' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_birth' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'adhar_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adhar_copy' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pancard_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pancard_copy' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'plot_certificate_copy' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'plot_certificate_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_active' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'unsigned' => false),
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
			'email' => 'Lorem ipsum dolor sit amet',
			'firstname' => 'Lorem ipsum dolor sit amet',
			'lastname' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor ',
			'mobile' => 'Lorem ipsum d',
			'gender' => 1,
			'role' => 1,
			'registrationid' => 'Lorem ip',
			'address1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'address2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'pincode' => 'Lore',
			'date_of_birth' => '2018-01-26 08:52:39',
			'adhar_no' => 'Lorem ipsu',
			'adhar_copy' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'pancard_no' => 'Lorem ip',
			'pancard_copy' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'plot_certificate_copy' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'plot_certificate_no' => 'Lorem ip',
			'is_active' => 1,
			'created' => '2018-01-26 08:52:39',
			'modified' => '2018-01-26 08:52:39'
		),
	);

}
