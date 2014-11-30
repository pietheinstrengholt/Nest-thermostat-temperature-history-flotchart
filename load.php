<?php

require_once('nest.class.php');

// Your Nest username and password.
define('USERNAME', 'nest@useraccount');
define('PASSWORD', 'yourpassword');

$nest = new Nest();

// Get the device information:
$infos = $nest->getDeviceInfo();

$conn = new PDO('mysql:host=localhost;dbname=nest', 'username', 'password');

$sql = "INSERT INTO statistics (mode,temperature,humidity,heat,alt_heat,auto_away,manual_away,leaf,time_to_target,temperature_target,mode_target) VALUES (:mode,:temperature,:humidity,:heat,:alt_heat,:auto_away,:manual_away,:leaf,:time_to_target,:temperature_target,:mode_target)";

$q = $conn->prepare($sql);
$q->execute(array(':mode'=>$infos->current_state->mode,
                  ':temperature'=>$infos->current_state->temperature,
                  ':humidity'=>$infos->current_state->humidity,
                  ':heat'=>$infos->current_state->heat,
                  ':alt_heat'=>$infos->current_state->alt_heat,
                  ':auto_away'=>$infos->current_state->auto_away,
                  ':manual_away'=>$infos->current_state->manual_away,
                  ':leaf'=>$infos->current_state->leaf,
                  ':time_to_target'=>$infos->target->time_to_target,
                  ':temperature_target'=>$infos->target->temperature,
                  ':mode_target'=>$infos->target->mode));
?>
