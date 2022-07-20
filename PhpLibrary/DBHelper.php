<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DBHelper {

    /**
	 * A sample function.
	 */
    public static function getUser($host, $dbName, $login) {
            $dsn = "sqlsrv:Server=" . $host . "; Database=" . $dbName . ";";
            $pdo = new PDO($dsn, '', '');
            //attributes
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $builder = new \Envms\FluentPDO\Query($pdo);

            $query = $builder->from('manager' . ' t')
                            ->leftJoin('role' . ' r ON r.id=t.role_id')
                            ->select('r.is_admin, r.name as role')
                            ->where('t.login', $login)->where('t.archived', 0);
            $arUser = $query->fetch();
            return $arUser;
    }  
}
