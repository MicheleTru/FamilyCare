<?php
class AllegatoTabella {


	public static function save($allegato) {
		$query = sprintf ( "INSERT INTO allegati (descrizione, nomefileorigine, nomefiledestinazione) VALUES ('%s','%s','%s');", 
				$allegato->getDescrizione (),
				$allegato->getNomeFileOrigine(),				
				$allegato->getNomeFileDestinazione()
				);
		mysql_query ( $query );
		return (mysql_affected_rows () == 1);
	}


	public static function getById($id) {
		$query = sprintf ( "SELECT * FROM allegati where id=%d;", $id );
		$result = mysql_query ( $query );
		if (mysql_affected_rows () != 1) {
			print "Errore" . mysql_error ();
		}
		$row = mysql_fetch_array ( $result );
		$allegato = new Allegato();
		$allegato->setId ( $row ["id"] );
		$allegato->setDescrizione ( $row ["descrizione"] );
		$allegato->setNomeFileOrigine( $row ["nomefileorigine"] );
		$allegato->setNomeFileDestinazione( $row ["nomefiledestinazione"] );
		return $allegato;
	}


	public static function update($allegato) {
		$query = sprintf ( "UPDATE allegati set descrizione='%s' WHERE id=%d;", $allegato ->getDescrizione (), $allegato->getId () );
		mysql_query ( $query );
		return (mysql_affected_rows () == 1);
	}


	public static function getAll() {
		$query = sprintf ( "SELECT * FROM allegati;" );
		$result = mysql_query ( $query );
		$allegati = array ();
		if ($result) {
			while ( $row = mysql_fetch_array ( $result ) ) {
				$allegato = new Allegato();
				$allegato->setId ( $row ["id"] );
				$allegato->setDescrizione ( $row ["descrizione"] );
				$allegato->setNomeFileOrigine( $row ["nomefileorigine"] );
				$allegato->setNomeFileDestinazione( $row ["nomefiledestinazione"] );
				$allegati[] = $allegato;
			}
		}
		return $allegati;
	}


	public static function delete($allegato) {
		$query = sprintf ( "DELETE FROM allegati WHERE id=%d;", $allegato->getId () );
		mysql_query ( $query );
		return (mysql_affected_rows () == 1);
	}
}