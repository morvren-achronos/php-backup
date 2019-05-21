<?php

namespace MorvrenAchronos\Backup;

use Useful\CliScript;

class Command extends CliScript
{
	public static function go()
	{
		$oScript = new self();
		$oScript->run();
	}

	public function test()
	{
		return 'So far so good';
	}
}
