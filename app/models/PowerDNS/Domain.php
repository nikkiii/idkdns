<?php
namespace PowerDNS;

class Domain extends Eloquent {
	protected $table = 'domains';

	protected function getDateFormat() {
		return 'U';
	}
}