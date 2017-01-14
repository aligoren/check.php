<?php

class Check
{

	public function all()
	{
		return json_encode(
			array('methods' => 
				'int', 'float', 'str',
				'bool', 'null', 'empty',
				'not_empty', 'numeric', 'object',
				'mail', 'ip', 'url', 'post', 'get',
				'array', 'version', 'version_gt',
				'version_lt', 'version_egt', 'version_elt',
				'installed'
			));
	}

	private function int($val) {
		if(filter_var($val, FILTER_VALIDATE_INT)) {
			return true;
		} else {
			return false;
		}
	}

	private function float($val) {
		if(is_float($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function str($val) {
		if(is_string($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function bool($val) {
		if(is_bool($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function null($val) {
		if(is_null($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function empty($val) {
		if(empty($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function not_empty($val) {
		if(!empty($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function numeric($val) {
		if(is_numeric($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function object($val) {
		if(is_object($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function mail($val) {
		if(filter_var($val, FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			return false;
		}
	}

	private function ip($val) {
		if(filter_var($val, FILTER_VALIDATE_IP)) {
			return true;
		} else {
			return false;
		}
	}

	private function url($val) {
		$val = (0 === strpos($val, 'http://') or 0 === strpos($val, 'https://')) ? $val : "http://".$val;
		if(filter_var($val, FILTER_VALIDATE_URL)) {
			return true;
		} else {
			return false;
		}
	}

	private function post($val) {
		if(isset($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function get($val) {
		if(isset($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function array($val) {
		if(is_array($val)) {
			return true;
		} else {
			return false;
		}
	}

	private function version($val) {
		if(version_compare(phpversion(), $val, '==')) {
			return true;
		} else {
			return false;
		}
	}

	private function version_gt($val) {
		if(version_compare(phpversion(), $val, '>')) {
			return true;
		} else {
			return false;
		}
	}

	private function version_lt($val) {
		if(version_compare(phpversion(), $val, '<')) {
			return true;
		} else {
			return false;
		}
	}

	private function version_egt($val) {
		if(version_compare(phpversion(), $val, '>=')) {
			return true;
		} else {
			return false;
		}
	}

	private function version_elt($val) {
		if(version_compare(phpversion(), $val, '<=')) {
			return true;
		} else {
			return false;
		}
	}

	private function installed($val) {
		if(extension_loaded($val)) {
			return true;
		} else {
			return false;
		}
	}

	public function _is($val, $type, $anonym = '') {

		$status = call_user_func_array(array($this, $type), array($val));

		if($status) {
			if($anonym != '') {
				return $anonym();
			} else {
				return $status;
			}
		} else {
			return false;
		}
	}
}

?>