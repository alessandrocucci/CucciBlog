<?php
/**
 *  Model 
 *
 *  @author alessandro.cucci@gmail.com
 *  @copyright 2015 - Alessandro Cucci - http://www.alessandrocucci.it
 *  @version 0.1
 *  @since 0.1
 */

class Model extends SQLQuery {
	protected $_model;

	function __construct() {

		$this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$this->_model = get_class($this);
		$this->_table = strtolower($this->_model)."s";
	}

	function __destruct() {
	}
}
