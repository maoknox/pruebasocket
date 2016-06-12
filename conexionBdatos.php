<?php
class conexionBdatos{
	function conecta(){
		$pgConn = pg_connect('host=ec2-54-243-203-104.compute-1.amazonaws.com port=5432 dbname=d3582kmq4j0op3 user=uupvzleouuzzqc password=frKjira5boxNBHG3veHH-4WV3U') or die("Error al conectar a la base de datos");
		if($pgConn){
			//pg_query($pgConn,"SET DATESTYLE TO SQL,European");
			return $pgConn;
		}
		else{
			return "error en la conexión";
		}
	}
}
?>
