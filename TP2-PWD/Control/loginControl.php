<?php
class LoginControl {
    private $usuarios = [
        ['usuario' => 'juan', 'clave' => '12345abc'],
        ['usuario' => 'maria', 'clave' => 'abc12345'],
        // Añadir más usuarios según sea necesario
    ];

    public function verificarUsuario($datos) {
        // Obtener usuario y clave del arreglo $datos
        $usuario = $datos['usuario'];
        $clave = $datos['clave'];

        // Recorremos todos los usuarios para ver si hay una coincidencia
        foreach ($this->usuarios as $user) {
            // Si encontramos una coincidencia, retornamos true
            if ($user['usuario'] === $usuario && $user['clave'] === $clave) {
                return true;
            }
        }

        // Si no encontramos ninguna coincidencia, retornamos false
        return false;
    }
}
?>