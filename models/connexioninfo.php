<?php
function get_user_info($login, $password)
{
    global $db;
    $req = $db->prepare('SELECT * FROM utilisateur WHERE login = ?  AND password = ?');
		$req->execute(array($login,$password));
    $rep = $req->fetchAll();
    return $rep;
}