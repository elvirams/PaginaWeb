<?php
class Database {
    public static function connect() {
        $host = 'servidormariadbtfg.mariadb.database.azure.com';
        $dbname = 'moviles';

        try {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=UTF8';
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => '/path/to/ca.pem',  // Ruta al archivo de certificado CA
                PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false, // Desactivar la verificación del certificado del servidor (solo para pruebas)
            );
            $dbh = new PDO($dsn, 'adminazure@servidormariadbtfg', 'emorcillos06@iesalbarregas.es', $options);
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
