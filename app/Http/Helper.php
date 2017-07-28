<?php

namespace Http;

class Helper {

	static public function num_random($length = 4) {
		return rand(pow(10, ($length - 1)), pow(10, $length) - 1);
	}
}