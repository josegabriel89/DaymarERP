<?php

class DB {

    /**
     * Conexion a la base de datos
     * @return \PDO
     */
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

    /**
     * Metodo para realizar consultas
     * @param string $sql  Consulta sql a realizar
     * @return type $resultado  Resultado de la consulta
     */
    protected static function ejecutaConsulta($sql) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $resultado = $dwes->query($sql);
        }
        return $resultado;
    }

    /**
     * Consultar el nombre de las columnas de una tabla
     * @param string $tabla  Nombre de la tabla en la cual buscar
     * @return string[] $indice  Indice de la tabla
     */
    public static function getindice($tabla) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tabla;
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

    /**
     * Devuelve una tabla entera
     * @param string $tabla Nombre de la tabla a consultar
     * @return string[][] Array multidimensional con los datos obtenidos
     */
    public static function gettabla($tabla) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tabla;
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

    /**
     * Devuelve unas determinadas columnas de una tabla entera
     * @param string $tabla Nombre de la tabla a consultar
     * @return string[][] Array multidimensional con los datos obtenidos
     */
    public static function getcolumnadetabla($tabla, $columnas) {
        $sql = "SELECT " . $columnas;
        $sql .= " FROM " . $tabla;
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

    /**
     * Realizar una consulta multivaluada son una condicion en una columna
     * @param string $tabla Nombre de la tabla a consultar
     * @param string $columna Columna del valor a comparar
     * @param string $condicion Valor que buscar en la tabla
     * @return string[][] Array multidimensional con los datos obtenidos
     */
    public static function getdatos($tabla, $columna, $condicion) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tabla;
        $sql .= " WHERE " . $columna . "='" . $condicion . "'";
        $resultado = self::ejecutaConsulta($sql);
        $elementos = array();
        if ($resultado) {
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $arraycolumnas = array();
                foreach ($row as $valor) {
                    $arraycolumnas[] = $valor;
                }
                $elementos[] = $arraycolumnas;
            }
        }
        return $elementos;
    }

    /**
     * Realizar una consulta multivaluada con varias condiciones condiciones
     * Los campos columnas y condiciones tienen que tener el mismo tamaño
     * @param string $tabla Nombre de la tabla a consultar
     * @param string[] $columnas Columnas del valor a comparar
     * @param string[] $condiciones Valores que buscar en la tabla
     * @param boolean $and si es true, las condiciones seran del timpo and, si es false, del tipo or
     * @return string[][] Array multidimensional con los datos obtenidos
     */
    public static function getdatosmultiplescondiciones($tabla, $columnas, $condiciones, $and) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tabla . " WHERE ";
        for ($index = 0; $index < count($columna); $index++) {
            if ($index != 0) {
                if ($and==true) {
                    $sql .= "AND ";
                } else {
                    $sql .= "OR ";
                }
            }
            $sql .= $columna[$index] . "='" . $condicion[$index] . "'";
        }
        $sql .= "'";
        $resultado = self::ejecutaConsulta($sql);
        $elementos = array();
        if ($resultado) {
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $arraycolumnas = array();
                foreach ($row as $valor) {
                    $arraycolumnas[] = $valor;
                }
                $elementos[] = $arraycolumnas;
            }
        }
        return $elementos;
    }

    public static function getentrefechas($tabla,$columnas, $columna, $fecha1,$fecha2) {
        $sql = "SELECT ".$columnas;
        $sql .= " FROM " . $tabla;
        $sql .= " WHERE " . $columna . ">'" . $fecha1 . "' AND ";
        $sql .= $columna . "<'" . $fecha2 . "'";
        $resultado = self::ejecutaConsulta($sql);
        $elementos = array();
        if ($resultado) {
            while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $arraycolumnas = array();
                foreach ($row as $valor) {
                    $arraycolumnas[] = $valor;
                }
                $elementos[] = $arraycolumnas;
            }
        }
        return $elementos;
    }
    
    /**
     * Consulta que devuelve un array de una fila segun una condicion
     * @param string $tabla Nombre de la tabla a consultar
     * @param string $columna Columna del valor a comparar
     * @param string $condicion Valor que buscar en la tabla
     * @return string[] $productos Array con los datos obtenidos
     */
    public static function getfila($tabla, $columna, $condicion) {
        $sql = "SELECT *";
        $sql .= " FROM " . $tabla;
        $sql .= " WHERE " . $columna . "='" . $condicion . "'";
        $resultado = self::ejecutaConsulta($sql);
        $productos = array();
        if ($resultado) {
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            foreach ($row as $valor) {
                $productos[] = $valor;
            }
        }
        return $productos;
    }

    /**
     * Consulta que devuelve un valor de una fila y una columna segun una condicion
     * @param string $tabla Nombre de la tabla a consultar
     * @param string $dato Elemento a mostar
     * @param string $columna Columna del valor a comparar
     * @param string $condicion Valor que buscar en la tabla
     * @return string $producto Dato obtenido
     */
    public static function getelemento($tabla, $dato, $columna, $condicion) {
        $sql = "SELECT " . $dato;
        $sql .= " FROM " . $tabla;
        $sql .= " WHERE " . $columna . "='" . $condicion . "'";
        $resultado = self::ejecutaConsulta($sql);
        if ($resultado) {
            $row = $resultado->fetch();
            $producto = $row[0];
        }
        return $producto;
    }

    /**
     * Insertar una nueva fila de datos en una tabla de la base de datos
     * @param String $tabla Nombre de la tabla de la base de datos
     * @param String[] $columnas Nombre de las columnas. su valor puede ser null en caso de que ve vayan a introducir datos en todas ellas
     * @param String[] $datos Array con los datos a almacenar
     */
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

    /**
     * Insertar varias filas de datos nuevas en una tabla de la base de datos
     * @param String $tabla Nombre de la tabla de la base de datos
     * @param String[] $columnas columnas Nombre de las columnas. su valor puede ser null en caso de que ve vayan a introducir datos en todas ellas
     * @param String[][] $datos datos Array multidimensinal con los datos a almacenar
     */
    public static function adddatos($tabla, $columnas, $datos) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $dwes->beginTransaction();
            foreach ($datos as $datosfila) {
                $sql = self::consulta($tabla, $columnas, $datosfila);
                $cambios = $dwes->exec($sql);
            }
            if ($cambios != 0) {
                $dwes->commit();
            } else {
                $dwes->rollback();
            }
        }
    }

    /**
     * Funcion para crear la sentencia sql de insercion 
     * @param String $tabla Nombre de la tabla de la base de datos
     * @param String[] $columnas columnas Nombre de las columnas. su valor puede ser null en caso de que ve vayan a introducir datos en todas ellas
     * @param String[] $datos datos Array multidimensinal con los datos a almacenar
     * @return string Sentencia sql de insercion de los datos
     */
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

    /**
     * Actualizacion de datos de una columna en una tabla segun una condicion
     * @param String $tabla Nombre de la tabla de la base de datos
     * @param String $columna nombre de la columna en la cual modificar el valor
     * @param String $dato valor a modificar
     * @param String $columnacondicion nombre de la columna con la cual se va a hacer la comprobacion del where
     * @param String $datocondicion valor por el cual se va a hacer la modificacion
     */
    public static function updatedato($tabla, $columna, $dato, $columnacondicion, $datocondicion) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $dwes->beginTransaction();
            $sql = "UPDATE $tabla SET $columna ='$dato' WHERE $columnacondicion='$datocondicion';";
            $cambios = $dwes->exec($sql);
        }if ($cambios != 0) {
            $dwes->commit();
        } else {
            $dwes->rollback();
        }
    }

    /**
     * Actualizacion de datos de varias columnas en una tabla segun una condicion
     * @param String $tabla Nombre de la tabla de la base de datos
     * @param String[] $columnas nombre de la columna en la cual modificar el valor
     * @param String[] $datos valor a modificar
     * @param String $columnacondicion nombre de la columna con la cual se va a hacer la comprobacion del where
     * @param String $datocondicion valor por el cual se va a hacer la modificacion
     */
    public static function updatedatos($tabla, $columnas, $datos, $columnacondicion, $datocondicion) {
        $dwes = self::conectar();
        if (isset($dwes)) {
            $dwes->beginTransaction();
            $sql = "UPDATE $tabla SET ";
            for ($i = 0; $i < count($columnas); $i++) {
                $sql .=$columnas[$i] . "= '" . $datos[$i] . "'";
                if ($i != count($columnas) - 1) {
                    $sql .=", ";
                }
            }
            $sql .= " WHERE $columnacondicion='$datocondicion';";
            $cambios = $dwes->exec($sql);
        }if ($cambios != 0) {
            $dwes->commit();
        } else {
            $dwes->rollback();
        }
    }

    /**
     * Funcion para borrar datos de la base de datos
     * @param String $tabla Nombre de la tabla de la base de datos
     * @param String $columna atributo con el cual se va a hacer la comprobacion del where
     * @param String $dato valor de la comprobacion del where
     */
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

    /**
     * Consulta preestablecida con la que comprobar si el usuario existe en la 
     * tabla "usuarios" y utilizando md5 en la contraseña
     * @param string $nombre nombre del usuario a buscar
     * @param string $contrasena contraseña sin codificar
     * @return boolean Devuelve true si los datos son correctos
     */
    public static function verificaUsuario($nombre, $contrasena) {
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

}

?>