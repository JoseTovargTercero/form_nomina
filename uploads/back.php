<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexión a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "caracterizacion");

    if ($mysqli->connect_error) {
        echo '<div class="alert alert-danger">Conexión fallida: ' . $mysqli->connect_error . '</div>';
        exit();
    }

    // Recogiendo los datos del formulario
    $cedula = $_POST['cedula'];
    $apellidos_nombres = $_POST['apellidos_nombres'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $cargo = $_POST['cargo'];
    $instruccion_academica = $_POST['instruccion_academica'];
    $anos_administracion_publica = $_POST['anos_administracion_publica'];
    $nacionalidad = $_POST['nacionalidad'];
    $estado_civil = $_POST['estado_civil'];
    $pueblo_indigena = $_POST['pueblo_indigena'];
    $sexo = $_POST['sexo'];
    $discapacidad = $_POST['discapacidad'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $comuna = $_POST['comuna'];
    $comunidad = $_POST['comunidad'];
    $calle = $_POST['calle'];
    $carga_familiar = $_POST['carga_familiar'];
    $hijos_menores = $_POST['hijos_menores'];
    $beca = $_POST['beca'];
    $ubicacion_administrativa = $_POST['ubicacion_administrativa'];

    // Insertar los datos (sin la imagen)
    $stmt = $mysqli->prepare("INSERT INTO empleados 
        (cedula, apellidos_nombres, fecha_ingreso, cargo, instruccion_academica, anos_administracion_publica, nacionalidad, estado_civil, pueblo_indigena, sexo, discapacidad, telefono, correo_electronico, comuna, comunidad, calle, carga_familiar, hijos_menores, beca, ubicacion_administrativa) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssiisssssssssiiss", $cedula, $apellidos_nombres, $fecha_ingreso, $cargo, $instruccion_academica, $anos_administracion_publica, $nacionalidad, $estado_civil, $pueblo_indigena, $sexo, $discapacidad, $telefono, $correo_electronico, $comuna, $comunidad, $calle, $carga_familiar, $hijos_menores, $beca, $ubicacion_administrativa);

    if ($stmt->execute()) {
        $last_id = $stmt->insert_id; // Obtener el ID del registro insertado

        // Procesar la imagen si se subió
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['foto']['tmp_name'];
            $fileName = $last_id . '.jpg'; // Nombre del archivo basado en el ID del empleado
            $destination = 'uploads/' . $fileName;

            if (move_uploaded_file($fileTmpPath, $destination)) {
                echo '<div class="alert alert-success">Registro guardado exitosamente y foto subida.</div>';
            } else {
                echo '<div class="alert alert-warning">Registro guardado, pero hubo un problema al subir la foto.</div>';
            }
        } else {
            echo '<div class="alert alert-success">Registro guardado exitosamente (sin foto).</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Error al guardar el registro: ' . $stmt->error . '</div>';
    }

    $stmt->close();
    $mysqli->close();
}
