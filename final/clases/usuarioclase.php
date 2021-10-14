<?php


class usuario
{
    private $dsn = "mysql:host=localhost:3307;dbname=sistemapnp";
    private $username = "root";
    private $password = "Aris123";
    private $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"');

    public function conectar()
    {
        try {
            $conexion = new PDO($this->dsn, $this->username, $this->password, $this->opciones);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return $conexion;
    }

    public function desconectar()
    {
        $conexion = null;
    }
}