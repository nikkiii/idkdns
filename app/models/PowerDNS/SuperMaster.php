<?php
namespace PowerDNS;

class SuperMaster extends Eloquent {
	protected $table = 'supermasters';

	protected function getDateFormat() {
		return 'U';
	}
}