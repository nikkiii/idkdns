<?php
namespace PowerDNS;

class Comment extends Eloquent {
	protected $table = 'comments';

	protected function getDateFormat() {
		return 'U';
	}
}