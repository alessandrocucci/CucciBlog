<?php
/**
 *  Post Controller: Visualizza i post del blog
 *
 *  @author alessandro.cucci@gmail.com
 *  @copyright 2015 - Alessandro Cucci - http://www.alessandrocucci.it
 *  @version 0.1
 *  @since 0.1
 */

class PostsController extends Controller {

	/**
	 * Visualizza un singolo post
	 * 
	 * @param  Int $art_id     [id dell'articolo]
	 * @param  String $art_titolo [titolo del post]
	 *
	 */
	function post($art_id = null,$art_titolo = null) {
	
		$this->set('title',$art_titolo.' - Cucci Blog');
		$this->set('post',$this->Post->select($art_id));

	}
	
	/**
	 * Visualizza tutti i post con titolo e anteprima
	 */
	function index() {

		/**
		 * Funzione per visualizzare la prima parte degli articoli
		 *
		 * 
		 * @param  String $testo     [l'articolo]
		 * @param  Int $lunghezza [numero di parole da visualizzare nell'anteprima]
		 * @param  String $finale    [Aggiunta del link all'articolo (Read More)]
		 * 
		 * @return String            [Anteprima articolo]
		 */
		function anteprima($testo, $lunghezza, $finale) {
			return (count($parole = explode(' ', $testo)) > $lunghezza) ? implode(' ', array_slice($parole, 0, $lunghezza)) . $finale : $testo;
		}

		$this->set('title','Alessandro Cucci - Blog');

		$articoli = $this->Post->selectAll();
		$this->set('post', $articoli);
	}

}
