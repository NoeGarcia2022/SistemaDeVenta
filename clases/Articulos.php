<?php
class articulos{
    public function agregaImagen($datos){
        $c=new conectar();
        $conexion=$c->conexion();

        $fecha=date('Y-m-d');

        $sql="INSERT into imagenes (id_categoria,
                                    nombre,
                                    ruta,
                                    fechaSubida)
                        values ('$datos[0]',
                                '$datos[1]',
                                '$datos[2]',
                                '$fecha')";
        $result=mysqli_query($conexion,$sql);

        return mysqli_insert_id($conexion);
    }
}
?>