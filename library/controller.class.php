<?php
/**
 *  Controller Class
 *
 *  @author alessandro.cucci@gmail.com
 *  @copyright 2015 - Alessandro Cucci - http://www.alessandrocucci.it
 *  @version 0.1
 *  @since 0.1
 */

class Controller {

	protected $_model;
	protected $_controller;
	protected $_action;
	protected $_template;

	function __construct($model, $controller, $action) {

		$this->_controller = $controller;
		$this->_action = $action;
		$this->_model = $model;

		$this->$model = new $model;
		$this->_template = new Template($controller,$action);

	}

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	function __destruct() {
			$this->_template->render();
	}

}
