<?php

namespace mehmetbulut\Zoopla\Groups;

use mehmetbulut\Zoopla\SynthesizeTrait;

class MinMaxArea implements \JsonSerializable
{
	use SynthesizeTrait;

	protected $arrSynthesize = array(
		'minimum' => array('type' => 'object', 'class' => Area::class, 'required' => true),
		'maximum' => array('type' => 'object', 'class' => Area::class, 'required' => true),
	);
}