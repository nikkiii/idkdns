<?php
namespace PowerDNS;

class Record extends Eloquent {
	protected $table = 'records';

	protected function getDateFormat() {
		return 'U';
	}
}