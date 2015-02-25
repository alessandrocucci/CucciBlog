<?php

class PostsController extends Controller {

	function post($art_id = null,$art_titolo = null) {
	
		$this->set('title',$art_titolo.' - Cucci Blog');
		$this->set('post',$this->Post->select($art_id));

	}
	
	function viewall() {

		$this->set('title','All Items - Cucci Blog');
		$this->set('post',$this->Post->selectAll());
	}

}
