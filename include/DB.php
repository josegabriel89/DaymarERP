<?php

class DB {

    protected static function conectar() {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=daymar"; //MODIFICAR EL NOMBRE DE LA BASE DE DATOS A LA CUAL SE ACCEDE
        $usuario = 'daymar'; //ATENCION POR SI EL USUARIO FUERA DISTINTO
        $contrasena = 'abc123.';

        try {
            $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
            $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        if (isset($dwes)) {
            return $dwes;
        }
    }

    protected static function ejecutaConsulta($sql) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $resultado = $dwes->query($sql);
        }
        return $resultado;
    }

    public static function getindice($tipo) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tipo;
        $resultado = self::ejecutaConsulta($sql);
        $indice = array();
        if ($resultado) {
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            if ($row != null) {
                $i = 0;
                foreach ($row as $clave => $arg) {
                    $indice[] = $clave;
                }
            }
        }
        return $indice;
    }

    public static function getlista($tipo, $columnas) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tipo;
        $resultado = self::ejecutaConsulta($sql);
        $elementos = array();
        if ($resultado) {
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $arraycolumnas = array();
                foreach ($row as $indice) {
                    $arraycolumnas[] = $indice;
                }
                $elementos[] = $arraycolumnas;
            }
        }
        return $elementos;
    }

    public static function obtienedato($tipo, $codigo) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tipo;
        $sql .= " WHERE cod='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);
        $producto = null;

        if (isset($resultado)) {
            $row = $resultado->fetch();
            $producto = new Producto($row);
        }

        return $producto;
    }

    public static function obtienedatos($tipo, $codigo) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tipo;
        $sql .= " WHERE cod='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);
        $productos = array();

        if ($resultado) {
            // Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch();
            while ($row != null) {
                $productos[] = new Producto($row);
                $row = $resultado->fetch();
            }
        }

        return $productos;
    }

    public static function gettelefonos($cliente) {
        $sql = "SELECT *";
        $sql .= " FROM telefonos";
        $sql .= " WHERE dni_cliente='" . $cliente . "'";
        $resultado = self::ejecutaConsulta($sql);
        $telefonos = array();

        if ($resultado) {
            while ($row = $resultado->fetch()) {
                $telefonos[] = $row['telefono'];
            }
        }

        return $telefonos;
    }

    public static function verificaCliente($nombre, $contrasena) {
        $sql = "SELECT usuario FROM usuarios ";
        $sql .= "WHERE usuario='$nombre' ";
        $sql .= "AND contrasena='" . md5($contrasena) . "';";
        $resultado = self::ejecutaConsulta($sql);
        $verificado = false;

        if (isset($resultado)) {
            $fila = $resultado->fetch();
            if ($fila !== false) {
                $verificado = true;
            }
        }
        return $verificado;
    }

    public static function adddato($tabla, $columnas, $datos) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $dwes->beginTransaction();
            $sql = self::consulta($tabla, $columnas, $datos);
            $cambios = $dwes->exec($sql);
            if ($cambios != 0) {
                $dwes->commit();
            } else {
                $dwes->rollback();
            }
        }
    }

    protected static function consulta($tabla, $columnas, $datos) {
        $sql = "INSERT INTO " . $tabla;
        if ($columnas != null) {
            $sql .= "(";
            for ($i = 0; $i < count($columnas); $i++) {
                $sql .=$columnas[$i];
                if ($i != count($columnas) - 1) {
                    $sql .=" ,";
                }
            }
            $sql .= ")";
        }
        $sql .= " VALUES (";
        for ($i = 0; $i < count($datos); $i++) {
            $sql .="'" . $datos[$i] . "'";
            if ($i != count($datos) - 1) {
                $sql .=" ,";
            }
        }
        $sql .= ");";
        return $sql;
    }

    public static function deletedatos($tabla, $columna, $dato) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $dwes->beginTransaction();
            $sql = "DELETE FROM $tabla WHERE $columna ='$dato';"; //no te olvides de poner el where en el delete from
            $cambios = $dwes->exec($sql);
        }if ($cambios != 0) {
            $dwes->commit();
        } else {
            $dwes->rollback();
        }
    }
}

?>
