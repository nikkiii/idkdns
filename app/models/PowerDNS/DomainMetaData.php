<?php
namespace PowerDNS;

class DomainMetaData extends Eloquent {
	protected $table = 'domainmetadata';

	protected function getDateFormat() {
		return 'U';
	}
}