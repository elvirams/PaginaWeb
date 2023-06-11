<?php
    # Método para realizar la conexión a la BBDD. Obtiene los datos de conexión de variables de entorno existentes en el fichero .env.
    class Database {
        public static function connect () 
        {
            #$host='mariadb';
            #$dbname=getenv('MARIADB_DATABASE');
            #$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "servidormariadbtfg.mariadb.database.azure.com", "adminazure@servidormariadbtfg", {your_password}, {your_database}, 3306);
            try {
                #$dsn = 'mysql:host='.$host.";dbname=".$dbname.";charset=UTF8";
                #$dbh = new PDO($dsn, getenv('MARIADB_USER'), getenv('MARIADB_PASSWORD'));
                $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "servidormariadbtfg.mariadb.database.azure.com", "adminazure@servidormariadbtfg", {your_password}, {your_database}, 3306);
   
                return $con;
                
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>
