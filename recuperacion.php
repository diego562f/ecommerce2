<?php
class usuarios {
    private $id;
    private $nombre;
    private $clave;
    private $correo;

    public function __construct($id, $nombre, $clave, $correo) {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $this->nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        $this->clave = $clave; // Hash de la contraseña
        $this->correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    }

    public function modificarUsuario($conn) {
        try {
            $stmt = $conn->prepare("UPDATE registros SET nombre = ?, clave = ?, correo = ? WHERE correo = ?");
            $stmt->bind_param("ssss", $this->nombre, $this->clave, $this->correo, $this->correo); // Cambiado a "ssss"

            if ($stmt->execute()) {
                $stmt->close();
                return true;
            } else {
                throw new Exception("Error ejecutando la consulta: " . $stmt->error);
            }
        } catch (Exception $e) {
            error_log($e->getMessage()); // Log del error
            return false;
        }
    }
}
?>
