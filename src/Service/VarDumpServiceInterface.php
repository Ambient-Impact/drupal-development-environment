<?php

namespace Drupal\development_environment\Service;

interface VarDumpServiceInterface
{
	public function varDump($var, $return = false, $html = false, $level = 0);
}
