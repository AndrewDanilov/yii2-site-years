<?php

namespace andrewdanilov\SiteYears;

use yii\base\Widget;

class SiteYears extends Widget
{
	public $startYear;
	public $delimiter = ' - ';

	public function run()
	{
		if ($this->startYear === null) {
			$this->startYear = date('Y');
		}
		$years = date('Y');
		if ($years !== (string)$this->startYear) {
			$years = $this->startYear . $this->delimiter . $years;
		}
		return $years;
	}
}