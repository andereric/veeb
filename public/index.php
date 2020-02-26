<?php require_once '../app/bootstrap.php';

$init = new Core();

$db = new Database();
//$sql = 'INSERT INTO users SET '.
//       'name=:name, '.
//       'email=:email, '.
//      'pass=:pass ';
//
//$db->query($sql);
//$db->bind(':name', 'Anna Karutina');
//$db->bind(':email', 'anna@host.loc');
//$db->bind(':pass', 'qwerty');
//$db->execute();
$sql = 'SELECT * FROM users WHERE id=:id';
$db->query($sql);
$db->bind(':id', 1);
$db->execute();
$data = $db->rowCount();
echo '<pre>';
print_r($data);
echo '</pre>';
