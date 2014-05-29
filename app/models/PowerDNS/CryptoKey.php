<?php
namespace PowerDNS;

class CryptoKey extends Eloquent {
	protected $table = 'cryptokeys';

	protected function getDateFormat() {
		return 'U';
	}
}