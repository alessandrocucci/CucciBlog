<br/>
<?php
	function anteprima($testo, $lunghezza, $finale) {
		return (count($parole = explode(' ', $testo)) > $lunghezza) ? implode(' ', array_slice($parole, 0, $lunghezza)) . $finale : $testo;
	}
?>

<?php foreach ($post as $postitem):?>
	<a href="../posts/post/<?php echo $postitem['Post']['art_id']?>/<?php echo strtolower(str_replace(" ","-",$postitem['Post']['art_titolo']))?>">
	<h2>
	<?php echo $postitem['Post']['art_titolo']?>
	</h2>
	</a>
	<br/>
	<?php 
		$id = $postitem['Post']['art_id'];
		$link = " ...<br><h4><a href=\"articolo.php?id=$id\">Leggi tutto</a></h4>";
		echo anteprima($postitem['Post']['art_articolo'], 60, $link); 
	?>
	<br><br>
<?php endforeach?>
