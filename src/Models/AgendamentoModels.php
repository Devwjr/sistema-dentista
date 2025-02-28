<?php
require_once 'config/Database.php';

class Agendamento {
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->query("SELECT * FROM agendamentos ORDER BY data_hora ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function create($cliente_id, $data_hora, $servico) {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO agendamentos (cliente_id, data_hora, servico) VALUES (?, ?, ?)");
        return $stmt->execute([$cliente_id, $data_hora, $servico]);
    }

    public static function delete($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("DELETE FROM agendamentos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
