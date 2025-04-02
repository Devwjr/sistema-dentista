<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '1234';
$db_name = 'dentistas';


$global_connection = null;


function get_db_connection() {
    global $global_connection, $db_host, $db_user, $db_pass, $db_name;
    
    if ($global_connection === null) {
        try {
            $global_connection = new PDO(
                "mysql:host=$db_host;dbname=$db_name;charset=utf8",
                $db_user,
                $db_pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $e) {
            error_log("Database connection error: " . $e->getMessage());
            die("Erro ao conectar ao banco de dados. Por favor, tente novamente mais tarde.");
        }
    }
    
    return $global_connection;
}

