<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="db_mnt_cr";
$db_table_name="boletas";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);
 
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$subs_mantenimiento_de_equipo = utf8_decode($_POST['mantenimiento_de_equipo']);
$subs_entrega_de_proyecto = utf8_decode($_POST['entrega_de_proyecto']);
$subs_fecha = utf8_decode($_POST['fecha']);
$subs_t_entrada = utf8_decode($_POST['t_entrada']);
$subs_t_salida = utf8_decode($_POST['t_salida']);
$subs_encargado1 = utf8_decode($_POST['encargado1']);
$subs_telefono = utf8_decode($_POST['telefono']);
$subs_tecnico1 = utf8_decode($_POST['tecnico1']);
$subs_tecnico2 = utf8_decode($_POST['tecnico2']); 
$subs_tecnico3 = utf8_decode($_POST['tecnico3']);
$subs_detalles = utf8_decode($_POST['detalles']); 
 
$resultado=mysql_query("SELECT * FROM ".$db_table_name.", $db_connection);
 
if (mysql_num_rows($resultado)>0)
{
 
header('Location: Fail.html');
 
} else {
 
 $insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`fecha` , `t_entrada` , `t_salida` , `encargado1` , `telefono` , `tecnico1` , `tecnico2` , `tecnico3` , `detalles` )
  VALUES ("' . $subs_mantenimiento_de_equipo . '", "' . $subs_entrega_de_proyecto . '", "' . $subs_fecha . '", "' . $subs_t_entrada . '", "' . $subs_t_salida . '", "' . $subs_encargado1 . '", "' . $subs_telefono . '", "' . $subs_tecnico1 . '", "' . $subs_tecnico2 . '", "' . $subs_tecnico3 . '", "' . $subs_detalles . '" )';
 
mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
 
header('Location: Success.html');
}
 
mysql_close($db_connection);
 
?>