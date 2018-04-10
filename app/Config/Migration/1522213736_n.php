<?php
class N extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field'=>array(
			'posts'=>array(
				'slug'=>array('type'=>'string','null'=>true,'default'=>Null,'length'=>50,'collate'=>'latin1_swedish_ci','charset'=>'latin1','after'=>'created'
					),
			),
		),
	),
		'down' => array(
			'drop_field'=>array('posts'=>array('slug',)),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
