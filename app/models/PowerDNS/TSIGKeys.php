<?php
namespace PowerDNS;

class TSIGKeys extends Eloquent {
	protected $table = 'tsigkeys';

	protected function getDateFormat() {
		return 'U';
	}
}