<?php

require_once 'back/conexion.php';


$query55 = $db->query("select * from local_comunas");
$countries55 = array();
while ($r55 = $query55->fetch_object()) {
    $countries55[] = $r55;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Completo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="chosen.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .border-danger {
            border: 1px solid #ff7600 !important;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-5">Registro Completo de Empleado</h2>
        <form id="employeeForm" enctype="multipart/form-data">
            <!-- Cedula -->
            <div class="row mb-3">
                <label for="cedula" class="col-sm-2 col-form-label">Cédula</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="cedula" name="cedula">
                </div>
            </div>
            <!-- Apellidos y Nombres -->
            <div class="row mb-3">
                <label for="apellidos_nombres" class="col-sm-2 col-form-label">Apellidos y Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos_nombres" name="apellidos_nombres">
                </div>
            </div>
            <!-- Fecha de Ingreso -->
            <div class="row mb-3">
                <label for="fecha_ingreso" class="col-sm-2 col-form-label">Fecha de Ingreso</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
                </div>
            </div>
            <!-- Cargo -->
            <div class="row mb-3">
                <label for="cargo" class="col-sm-2 col-form-label">Cargo</label>
                <div class="col-sm-10">
                    <select class="form-control chosen-select" id="cargo" name="cargo">
                        <option value="">Seleccione</option>
                        <option value="35121">ABOGADO I</option>
                        <option value="35122">ABOGADO II</option>
                        <option value="35123">ABOGADO III</option>
                        <option value="35124">ABOGADO IV</option>
                        <option value="35125">ABOGADO V</option>
                        <option value="12121">ADMINISTRADOR I</option>
                        <option value="12122">ADMINISTRADOR II</option>
                        <option value="12123">ADMINISTRADOR III</option>
                        <option value="12124">ADMINISTRADOR IV</option>
                        <option value="12125">ADMINISTRADOR V</option>
                        <option value="25211">ALMACENISTA I</option>
                        <option value="25212">ALMACENISTA II</option>
                        <option value="25213">ALMACENISTA III</option>
                        <option value="25214">ALMACENISTA IV</option>
                        <option value="13221">ANALISTA DE ORGANIZACION Y SISTEMAS I</option>
                        <option value="13222">ANALISTA DE ORGANIZACION Y SISTEMAS II</option>
                        <option value="13223">ANALISTA DE ORGANIZACION Y SISTEMAS III</option>
                        <option value="13224">ANALISTA DE ORGANIZACION Y SISTEMAS IV</option>
                        <option value="13225">ANALISTA DE ORGANIZACION Y SISTEMAS V</option>
                        <option value="15121">ANALISTA DE PERSONAL I</option>
                        <option value="15122">ANALISTA DE PERSONAL II</option>
                        <option value="15123">ANALISTA DE PERSONAL III</option>
                        <option value="15124">ANALISTA DE PERSONAL IV</option>
                        <option value="15125">ANALISTA DE PERSONAL V</option>
                        <option value="13411">ANALISTA DE PRESUPUESTO I</option>
                        <option value="13412">ANALISTA DE PRESUPUESTO II</option>
                        <option value="13413">ANALISTA DE PRESUPUESTO III</option>
                        <option value="13414">ANALISTA DE PRESUPUESTO IV</option>
                        <option value="13415">ANALISTA DE PRESUPUESTO V</option>
                        <option value="23451">ANALISTA DE PROCESAMIENTO DE DATOS I</option>
                        <option value="23452">ANALISTA DE PROCESAMIENTO DE DATOS II</option>
                        <option value="23453">ANALISTA DE PROCESAMIENTO DE DATOS III</option>
                        <option value="23454">ANALISTA DE PROCESAMIENTO DE DATOS IV</option>
                        <option value="23455">ANALISTA DE PROCESAMIENTO DE DATOS V</option>
                        <option value="85311">ANALISTA DE SEGURIDAD Y DEFENSA I</option>
                        <option value="85312">ANALISTA DE SEGURIDAD Y DEFENSA II</option>
                        <option value="85313">ANALISTA DE SEGURIDAD Y DEFENSA III</option>
                        <option value="85314">ANALISTA DE SEGURIDAD Y DEFENSA IV</option>
                        <option value="85315">ANALISTA DE SEGURIDAD Y DEFENSA V</option>
                        <option value="14121">ANALISTA FINANCIERO I</option>
                        <option value="14122">ANALISTA FINANCIERO II</option>
                        <option value="14123">ANALISTA FINANCIERO III</option>
                        <option value="14124">ANALISTA FINANCIERO IV</option>
                        <option value="14125">ANALISTA FINANCIERO V</option>
                        <option value="22121">ARCHIVISTA I</option>
                        <option value="22122">ARCHIVISTA II</option>
                        <option value="22123">ARCHIVISTA III</option>
                        <option value="22124">ARCHIVISTA IV</option>
                        <option value="22125">ARCHIVISTA V</option>
                        <option value="43531">ARQUITECTO I</option>
                        <option value="43532">ARQUITECTO II</option>
                        <option value="43533">ARQUITECTO III</option>
                        <option value="43534">ARQUITECTO IV</option>
                        <option value="43535">ARQUITECTO V</option>
                        <option value="12111">ASISTENTE ADMINISTRATIVO I</option>
                        <option value="12112">ASISTENTE ADMINISTRATIVO II</option>
                        <option value="12113">ASISTENTE ADMINISTRATIVO III</option>
                        <option value="12114">ASISTENTE ADMINISTRATIVO IV</option>
                        <option value="12115">ASISTENTE ADMINISTRATIVO V</option>
                        <option value="12116">ASISTENTE ADMINISTRATIVO VI</option>
                        <option value="79330">ASISTENTE EN SERVICIO SOCIAL I</option>
                        <option value="79331">ASISTENTE EN SERVICIO SOCIAL II</option>
                        <option value="79332">ASISTENTE EN SERVICIO SOCIAL III</option>
                        <option value="41131">ASISTENTE AGROPECUARIO I</option>
                        <option value="41132">ASISTENTE AGROPECUARIO II</option>
                        <option value="13311">ASISTENTE DE ANALISTA I</option>
                        <option value="13312">ASISTENTE DE ANALISTA II</option>
                        <option value="13313">ASISTENTE DE ANALISTA III</option>
                        <option value="35111">ASISTENTE DE ASUNTOS LEGALES I</option>
                        <option value="35112">ASISTENTE DE ASUNTOS LEGALES II</option>
                        <option value="36621">ASISTENTE DE BIBLIOTECA I</option>
                        <option value="36622">ASISTENTE DE BIBLIOTECA II</option>
                        <option value="36623">ASISTENTE DE BIBLIOTECA III</option>
                        <option value="43480">ASISTENTE DE INGENIERIA I</option>
                        <option value="43481">ASISTENTE DE INGENIERIA II</option>
                        <option value="72111">ASISTENTE DE LABORATORIO CLINICO I</option>
                        <option value="72112">ASISTENTE DE LABORATORIO CLINICO II</option>
                        <option value="72113">ASISTENTE DE LABORATORIO CLINICO III</option>
                        <option value="22211">ASISTENTE DE OFICINA I</option>
                        <option value="22212">ASISTENTE DE OFICINA II</option>
                        <option value="22213">ASISTENTE DE OFICINA III</option>
                        <option value="85611">ASISTENTE DE PRIMEROS AUXILIOS I</option>
                        <option value="85612">ASISTENTE DE PRIMEROS AUXILIOS II</option>
                        <option value="72430">ASISTENTE DE RAYOS X</option>
                        <option value="51321">ASISTENTE DE AEROPUERTO I</option>
                        <option value="51322">ASISTENTE DE AEROPUERTO II</option>
                        <option value="51323">ASISTENTE DE AEROPUERTO III</option>
                        <option value="21211">AUDITOR I</option>
                        <option value="21212">AUDITOR II</option>
                        <option value="21213">AUDITOR III</option>
                        <option value="21214">AUDITOR IV</option>
                        <option value="21215">AUDITOR V</option>
                        <option value="33110">ASISTENTE DE PROTOCOLO I</option>
                        <option value="33111">ASISTENTE DE PROTOCOLO II</option>
                        <option value="33112">ASISTENTE DE PROTOCOLO III</option>
                        <option value="31330">ASISTENTE DE RELACIONES PUBLICAS I</option>
                        <option value="31331">ASISTENTE DE RELACIONES PUBLICAS II</option>
                        <option value="31332">ASISTENTE DE RELACIONES PUBLICAS III</option>
                        <option value="31333">ASISTENTE DE RELACIONES PUBLICAS IV</option>
                        <option value="31334">ASISTENTE DE RELACIONES PUBLICAS V</option>
                        <option value="72510">ASISTENTE DE TERAPIA</option>
                        <option value="43621">ASISTENTE DE HIDROMETEOROLOGIA I</option>
                        <option value="43622">ASISTENTE DE HIDROMETEOROLOGIA II</option>
                        <option value="43623">ASISTENTE DE HIDROMETEOROLOGIA III</option>
                        <option value="36631">BIBLIOTECOLOGO I</option>
                        <option value="36632">BIBLIOTECOLOGO II</option>
                        <option value="36633">BIBLIOTECOLOGO III</option>
                        <option value="36634">BIBLIOTECOLOGO IV</option>
                        <option value="36635">BIBLIOTECOLOGO V</option>
                        <option value="72221">BIOANALISTA I</option>
                        <option value="72222">BIOANALISTA II</option>
                        <option value="72223">BIOANALISTA III</option>
                        <option value="72224">BIOANALISTA IV</option>
                        <option value="72225">BIOANALISTA V</option>
                        <option value="42521">BIOLOGO I</option>
                        <option value="42522">BIOLOGO II</option>
                        <option value="42523">BIOLOGO III</option>
                        <option value="42524">BIOLOGO IV</option>
                        <option value="42525">BIOLOGO V</option>
                        <option value="21511">CAJERO I</option>
                        <option value="21512">CAJERO II</option>
                        <option value="21513">CAJERO III</option>
                        <option value="21514">CAJERO IV</option>
                        <option value="25311">COMPRADOR I</option>
                        <option value="25312">COMPRADOR II</option>
                        <option value="25313">COMPRADOR III</option>
                        <option value="31321">COMUNICADOR SOCIAL I</option>
                        <option value="31322">COMUNICADOR SOCIAL II</option>
                        <option value="31323">COMUNICADOR SOCIAL III</option>
                        <option value="31324">COMUNICADOR SOCIAL IV</option>
                        <option value="31325">COMUNICADOR SOCIAL V</option>
                        <option value="21111">CONTABILISTA I</option>
                        <option value="21112">CONTABILISTA II</option>
                        <option value="21113">CONTABILISTA III</option>
                        <option value="21114">CONTABILISTA IV</option>
                        <option value="21131">CONTADOR I</option>
                        <option value="21132">CONTADOR II</option>
                        <option value="21133">CONTADOR III</option>
                        <option value="21134">CONTADOR IV</option>
                        <option value="21135">CONTADOR V</option>
                        <option value="43721">DIBUJANTE I</option>
                        <option value="43722">DIBUJANTE II</option>
                        <option value="43723">DIBUJANTE III</option>
                        <option value="77121">DIETISTA I</option>
                        <option value="77122">DIETISTA II</option>
                        <option value="77123">DIETISTA III</option>
                        <option value="77124">DIETISTA IV</option>
                        <option value="77125">DIETISTA V</option>
                        <option value="77141">ECONOMA I</option>
                        <option value="77142">ECONOMA II</option>
                        <option value="36221">ECONOMISTA I</option>
                        <option value="36222">ECONOMISTA II</option>
                        <option value="36223">ECONOMISTA III</option>
                        <option value="36224">ECONOMISTA IV</option>
                        <option value="36225">ECONOMISTA V</option>
                        <option value="71353">ENFERMERA DE SALUD PUBLICA I</option>
                        <option value="71354">ENFERMERA DE SALUD PUBLICA II</option>
                        <option value="71355">ENFERMERA DE SALUD PUBLICA III</option>
                        <option value="71356">ENFERMERA DE SALUD PUBLICA IV</option>
                        <option value="71357">ENFERMERA DE SALUD PUBLICA V</option>
                        <option value="34231">ENTRENADOR DEPORTIVO I</option>
                        <option value="34232">ENTRENADOR DEPORTIVO II</option>
                        <option value="34233">ENTRENADOR DEPORTIVO III</option>
                        <option value="34234">ENTRENADOR DEPORTIVO IV</option>
                        <option value="34235">ENTRENADOR DEPORTIVO V</option>
                        <option value="34236">ENTRENADOR DEPORTIVO VI</option>
                        <option value="74211">FARMACEUTICO I</option>
                        <option value="74212">FARMACEUTICO II</option>
                        <option value="74213">FARMACEUTICO III</option>
                        <option value="74214">FARMACEUTICO IV</option>
                        <option value="74215">FARMACEUTICO V</option>
                        <option value="21321">FISCAL DE RENTAS I</option>
                        <option value="21322">FISCAL DE RENTAS II</option>
                        <option value="21323">FISCAL DE RENTAS III</option>
                        <option value="21324">FISCAL DE RENTAS IV</option>
                        <option value="21325">FISCAL DE RENTAS V</option>
                        <option value="45251">FOTOGRAFO I</option>
                        <option value="45252">FOTOGRAFO II</option>
                        <option value="45253">FOTOGRAFO III</option>
                        <option value="72531">FISIOTERAPEUTA I</option>
                        <option value="72532">FISIOTERAPEUTA II</option>
                        <option value="72533">FISIOTERAPEUTA III</option>
                        <option value="72534">FISIOTERAPEUTA IV</option>
                        <option value="72535">FISIOTERAPEUTA V</option>
                        <option value="51331">GESTOR DE AEROPUERTO I</option>
                        <option value="51332">GESTOR DE AEROPUERTO II</option>
                        <option value="51333">GESTOR DE AEROPUERTO III</option>
                        <option value="31581">GESTOR DE SERVICIOS TURISTICOS I</option>
                        <option value="31582">GESTOR DE SERVICIOS TURISTICOS II</option>
                        <option value="31583">GESTOR DE SERVICIOS TURISTICOS III</option>
                        <option value="44341">GEOLOGO I</option>
                        <option value="44342">GEOLOGO II</option>
                        <option value="44343">GEOLOGO III</option>
                        <option value="44344">GEOLOGO IV</option>
                        <option value="44345">GEOLOGO V</option>
                        <option value="73121">HIGIENISTA DENTAL I</option>
                        <option value="73122">HIGIENISTA DENTAL II</option>
                        <option value="31521">INFORMADOR TURISTICO I</option>
                        <option value="31522">INFORMADOR TURISTICO II</option>
                        <option value="31523">INFORMADOR TURISTICO III</option>
                        <option value="31524">INFORMADOR TURISTICO IV</option>
                        <option value="31525">INFORMADOR TURISTICO V</option>
                        <option value="31526">INFORMADOR TURISTICO VI</option>
                        <option value="41151">INGENIERO AGRONOMO I</option>
                        <option value="41152">INGENIERO AGRONOMO II</option>
                        <option value="41153">INGENIERO AGRONOMO III</option>
                        <option value="41154">INGENIERO AGRONOMO IV</option>
                        <option value="41155">INGENIERO AGRONOMO V</option>
                        <option value="43421">INGENIERO CIVIL I</option>
                        <option value="43422">INGENIERO CIVIL II</option>
                        <option value="43423">INGENIERO CIVIL III</option>
                        <option value="43424">INGENIERO CIVIL IV</option>
                        <option value="43425">INGENIERO CIVIL V</option>
                        <option value="44411">INGENIERO DE MINAS I</option>
                        <option value="44412">INGENIERO DE MINAS II</option>
                        <option value="44413">INGENIERO DE MINAS III</option>
                        <option value="44414">INGENIERO DE MINAS IV</option>
                        <option value="44415">INGENIERO DE MINAS V</option>
                        <option value="46511">INGENIERO ELECTRICISTA I</option>
                        <option value="46512">INGENIERO ELECTRICISTA II</option>
                        <option value="46513">INGENIERO ELECTRICISTA III</option>
                        <option value="46514">INGENIERO ELECTRICISTA IV</option>
                        <option value="46515">INGENIERO ELECTRICISTA V</option>
                        <option value="43641">INGENIERO HIDROMETEOROLOGISTA I</option>
                        <option value="43642">INGENIERO HIDROMETEOROLOGISTA II</option>
                        <option value="46643">INGENIERO HIDROMETEOROLOGISTA III</option>
                        <option value="46644">INGENIERO HIDROMETEOROLOGISTA IV</option>
                        <option value="46645">INGENIERO HIDROMETEOROLOGISTA V</option>
                        <option value="46311">INGENIERO MECANICO I</option>
                        <option value="46312">INGENIERO MECANICO II</option>
                        <option value="46313">INGENIERO MECANICO III</option>
                        <option value="46314">INGENIERO MECANICO IV</option>
                        <option value="46315">INGENIERO MECANICO V</option>
                        <option value="44521">INGENIERO PETROLERO I</option>
                        <option value="44522">INGENIERO PETROLERO II</option>
                        <option value="44523">INGENIERO PETROLERO III</option>
                        <option value="44741">INGENIERO QUIMICO I</option>
                        <option value="44742">INGENIERO QUIMICO II</option>
                        <option value="43441">INGENIERO SANITARIO I</option>
                        <option value="43442">INGENIERO SANITARIO II</option>
                        <option value="43443">INGENIERO SANITARIO III</option>
                        <option value="43444">INGENIERO SANITARIO IV</option>
                        <option value="43445">INGENIERO SANITARIO V</option>
                        <option value="43460">INSPECTOR AUXILIAR DE OBRAS DE INGENIERIA</option>
                        <option value="43471">INSPECTOR DE OBRAS DE INGENIERIA I</option>
                        <option value="43472">INSPECTOR DE OBRAS DE INGENIERIA II</option>
                        <option value="43473">INSPECTOR DE OBRAS DE INGENIERIA III</option>
                        <option value="43474">INSPECTOR DE OBRAS DE INGENIERIA IV</option>
                        <option value="43475">INSPECTOR DE OBRAS DE INGENIERIA V</option>
                        <option value="21311">INSPECTOR DE RENTAS I</option>
                        <option value="21312">INSPECTOR DE RENTAS II</option>
                        <option value="76231">INSPECTOR DE SALUD PUBLICA I</option>
                        <option value="76232">INSPECTOR DE SALUD PUBLICA II</option>
                        <option value="76233">INSPECTOR DE SALUD PUBLICA III</option>
                        <option value="31561">INSPECTOR TURISTICO I</option>
                        <option value="31562">INSPECTOR TURISTICO II</option>
                        <option value="31563">INSPECTOR TURISTICO III</option>
                        <option value="31564">INSPECTOR TURISTICO IV</option>
                        <option value="31565">INSPECTOR TURISTICO V</option>
                        <option value="31566">INSPECTOR TURISTICO VI</option>
                        <option value="45121">LABORATORISTA I</option>
                        <option value="45122">LABORATORISTA II</option>
                        <option value="45123">LABORATORISTA III</option>
                        <option value="32141">LOCUTOR I</option>
                        <option value="32142">LOCUTOR II</option>
                        <option value="32143">LOCUTOR III</option>
                        <option value="21341">LIQUIDADOR I</option>
                        <option value="21342">LIQUIDADOR II</option>
                        <option value="21343">LIQUIDADOR III</option>
                        <option value="75131">MEDICO I</option>
                        <option value="75132">MEDICO II</option>
                        <option value="75133">MEDICO III</option>
                        <option value="75311">MEDICO ESPECIALISTA I</option>
                        <option value="75312">MEDICO ESPECIALISTA II</option>
                        <option value="75313">MEDICO ESPECIALISTA III</option>
                        <option value="75314">MEDICO ESPECIALISTA IV</option>
                        <option value="75315">MEDICO ESPECIALISTA V</option>
                        <option value="78211">MEDICO VETERINARIO I</option>
                        <option value="78212">MEDICO VETERINARIO II</option>
                        <option value="78213">MEDICO VETERINARIO III</option>
                        <option value="78214">MEDICO VETERINARIO IV</option>
                        <option value="78215">MEDICO VETERINARIO V</option>
                        <option value="73211">ODONTOLOGO I</option>
                        <option value="73212">ODONTOLOGO II</option>
                        <option value="73213">ODONTOLOGO III</option>
                        <option value="73214">ODONTOLOGO IV</option>
                        <option value="73215">ODONTOLOGO V</option>
                        <option value="85511">OFICIAL DE BUSQUEDA Y SALVAMENTO I</option>
                        <option value="85512">OFICIAL DE BUSQUEDA Y SALVAMENTO II</option>
                        <option value="85513">OFICIAL DE BUSQUEDA Y SALVAMENTO III</option>
                        <option value="85514">OFICIAL DE BUSQUEDA Y SALVAMENTO IV</option>
                        <option value="23331">OPERADOR DE EQUIPOS DE COMPUTACION I</option>
                        <option value="23332">OPERADOR DE EQUIPOS DE COMPUTACION II</option>
                        <option value="23333">OPERADOR DE EQUIPOS DE COMPUTACION III</option>
                        <option value="23334">OPERADOR DE EQUIPOS DE COMPUTACION IV</option>
                        <option value="23335">OPERADOR DE EQUIPOS DE COMPUTACION V</option>
                        <option value="23336">OPERADOR DE EQUIPOS DE COMPUTACION VI</option>
                        <option value="51411">OPERADOR DE TELECOMUNICACIONES I</option>
                        <option value="51412">OPERADOR DE TELECOMUNICACIONES II</option>
                        <option value="51413">OPERADOR DE TELECOMUNICACIONES III</option>
                        <option value="51414">OPERADOR DE TELECOMUNICACIONES IV</option>
                        <option value="51415">OPERADOR DE TELECOMUNICACIONES V</option>
                        <option value="42138">PISCICULTOR I</option>
                        <option value="42139">PISCICULTOR II</option>
                        <option value="13361">PLANIFICADOR I</option>
                        <option value="13362">PLANIFICADOR II</option>
                        <option value="13363">PLANIFICADOR III</option>
                        <option value="13364">PLANIFICADOR IV</option>
                        <option value="13365">PLANIFICADOR V</option>
                        <option value="23421">PROGRAMADOR I</option>
                        <option value="23422">PROGRAMADOR II</option>
                        <option value="23423">PROGRAMADOR III</option>
                        <option value="23424">PROGRAMADOR IV</option>
                        <option value="23425">PROGRAMADOR V</option>
                        <option value="37921">PROMOTOR CULTURAL I</option>
                        <option value="37922">PROMOTOR CULTURAL II</option>
                        <option value="37923">PROMOTOR CULTURAL III</option>
                        <option value="37924">PROMOTOR CULTURAL IV</option>
                        <option value="37925">PROMOTOR CULTURAL V</option>
                        <option value="79370">PROMOTOR DE BIENESTAR SOCIAL I</option>
                        <option value="79371">PROMOTOR DE BIENESTAR SOCIAL II</option>
                        <option value="79372">PROMOTOR DE BIENESTAR SOCIAL III</option>
                        <option value="31541">PROMOTOR TURISTICO I</option>
                        <option value="31542">PROMOTOR TURISTICO II</option>
                        <option value="31543">PROMOTOR TURISTICO III</option>
                        <option value="31544">PROMOTOR TURISTICO IV</option>
                        <option value="31545">PROMOTOR TURISTICO V</option>
                        <option value="31546">PROMOTOR TURISTICO VI</option>
                        <option value="36321">PSICOLOGO I</option>
                        <option value="36322">PSICOLOGO II</option>
                        <option value="36323">PSICOLOGO III</option>
                        <option value="36324">PSICOLOGO IV</option>
                        <option value="36325">PSICOLOGO V</option>
                        <option value="31351">PUBLICISTA I</option>
                        <option value="31352">PUBLICISTA II</option>
                        <option value="31353">PUBLICISTA III</option>
                        <option value="31354">PUBLICISTA IV</option>
                        <option value="31355">PUBLICISTA V</option>
                        <option value="25111">REGISTRADOR DE BIENES Y MATERIAS I</option>
                        <option value="25112">REGISTRADOR DE BIENES Y MATERIAS II</option>
                        <option value="25113">REGISTRADOR DE BIENES Y MATERIAS III</option>
                        <option value="25114">REGISTRADOR DE BIENES Y MATERIAS IV</option>
                        <option value="25115">REGISTRADOR DE BIENES Y MATERIAS V</option>
                        <option value="25116">REGISTRADOR DE BIENES Y MATERIAS VI</option>
                        <option value="24311">SECRETARIA I</option>
                        <option value="24312">SECRETARIA II</option>
                        <option value="24313">SECRETARIA III</option>
                        <option value="24314">SECRETARIA IV</option>
                        <option value="24315">SECRETARIA V</option>
                        <option value="24341">SECRETARIA EJECUTIVA I</option>
                        <option value="24342">SECRETARIA EJECUTIVA II</option>
                        <option value="24343">SECRETARIA EJECUTIVA III</option>
                        <option value="24344">SECRETARIA EJECUTIVA IV</option>
                        <option value="24345">SECRETARIA EJECUTIVA V</option>
                        <option value="25220">SUPERVISOR DE ALMACEN I</option>
                        <option value="25221">SUPERVISOR DE ALMACEN II</option>
                        <option value="22411">SUPERVISOR DE SERVICIOS GENERALES DE</option>
                        <option value="0000">PERSONAL I</option>
                        <option value="22412">SUPERVISOR DE SERVICIOS GENERALES DE</option>
                        <option value="0000">PERSONAL II</option>
                        <option value="22413">SUPERVISOR DE SERVICIOS GENERALES DE</option>
                        <option value="0000">PERSONAL III</option>
                        <option value="41111">TECNICO AGROPECUARIO I</option>
                        <option value="41112">TECNICO AGROPECUARIO II</option>
                        <option value="41113">TECNICO AGROPECUARIO III</option>
                        <option value="41114">TECNICO AGROPECUARIO IV</option>
                        <option value="72411">TECNICO DE EQUIPOS MEDICOS I</option>
                        <option value="72412">TECNICO DE EQUIPOS MEDICOS II</option>
                        <option value="72413">TECNICO DE EQUIPOS MEDICOS III</option>
                        <option value="72414">TECNICO DE EQUIPOS MEDICOS IV</option>
                        <option value="72415">TECNICO DE EQUIPOS MEDICOS V</option>
                        <option value="72441">TECNICO RADIOLOGO I</option>
                        <option value="72442">TECNICO RADIOLOGO II</option>
                        <option value="79341">TECNICO SUPERIOR EN TRABAJO SOCIAL I</option>
                        <option value="79342">TECNICO SUPERIOR EN TRABAJO SOCIAL II</option>
                        <option value="79351">TRABAJADOR SOCIAL I</option>
                        <option value="79352">TRABAJADOR SOCIAL II</option>
                        <option value="79353">TRABAJADOR SOCIAL III</option>
                        <option value="79534">TRABAJADOR SOCIAL IV</option>
                        <option value="79355">TRABAJADOR SOCIAL V</option>
                        <option value="43121">TOPOGRAFO I</option>
                        <option value="43122">TOPOGRAFO II</option>
                        <option value="7102">ASEADORA (Bedel)</option>
                        <option value="7102">OBRERO</option>
                        <option value="7104">AUXILIAR DE LABORATORIO</option>
                        <option value="7104">CAMARERA</option>
                        <option value="7107">ASEADOR DE AREAS PUBLICAS</option>
                        <option value="7103">AYUDANTE DE COSTURA</option>
                        <option value="2127">AYUDANTE DE SERVICIOS DE COCINA</option>
                        <option value="3128">PORTERO</option>
                        <option value="7129">MENSAJERO</option>
                        <option value="7135">DEPOSITARIO</option>
                        <option value="7133">CUIDADOR DE AREAS VERDES</option>
                        <option value="4125">OPERADOR DE COMPAGINACION Y ENCUADERNACION</option>
                        <option value="5125">AYUDANTE DE MAQUINARIA</option>
                        <option value="7127">CERRAJERO</option>
                        <option value="7128">LAVANDERO</option>
                        <option value="7155">MENSAJERO MOTORIZADO</option>
                        <option value="7153">JARDINERO</option>
                        <option value="5155">AYUDANTE DE MECANIZA EN GENERAL</option>
                        <option value="7152">AYUDANTE DE SERVICIOS GENERALES</option>
                        <option value="1151">AYUDANTE AGROPECUARIO</option>
                        <option value="4151">OPERADOR DE MAQUINA Y FOTOCOPIADORA</option>
                        <option value="5152">AYUDANTE DE MANTENIMIENTO DE VIAS TERRESTRES</option>
                        <option value="6150">FUMIGADOR</option>
                        <option value="6151">ASEADOR DE MATERIALES DE LABORATORIO</option>
                        <option value="7157">OPERADOR DE MAQUINAS DE OFICINAS</option>
                        <option value="7160">OPERADOR DE SONIDO</option>
                        <option value="6174">CAMILLERO</option>
                        <option value="3176">RECEPTOR INFORMADOR</option>
                        <option value="7174">CHOFER</option>
                        <option value="7177">PINTOR</option>
                        <option value="5174">LATONERO Y PINTOR</option>
                        <option value="5176">MECANICO DE MOTO</option>
                        <option value="7204">COSTURERO (A)</option>
                        <option value="2202">COCINERO (A)</option>
                        <option value="8201">VIGILANTE</option>
                        <option value="5202">OPERADOR DE MAQUINAS LIVIANAS</option>
                        <option value="7212">PLOMERO</option>
                        <option value="7202">AUXILIAR DE SERVICIOS DE OFICINA</option>
                        <option value="7201">AYUDANTE DE ALMACEN</option>
                        <option value="1537">POLICIA ESCOLAR</option>
                        <option value="7208">HERRERO</option>
                        <option value="7206">CHOFER DE TRANSPORTE</option>
                        <option value="5201">MAQUINISTA</option>
                        <option value="5204">MECANICO DE IMPRENTA</option>
                        <option value="5205">MECANICO DE MAQUINARIAS INDUSTRIALES</option>
                        <option value="6201">AUXILIAR DE FARMACIA</option>
                        <option value="7203">AUXILIAR DE TELECOMUNICACIONES</option>
                        <option value="7213">TAPICERO</option>
                        <option value="7218">UTILERO</option>
                        <option value="7231">CHOFER DE CARGA</option>
                        <option value="5226">MECANICO DE REFRIGERACION</option>
                        <option value="5225">MECANICO AUTOMOTRIZ</option>
                        <option value="6228">AUXILIAR DE MEDICINA SIMPLIFICADA</option>
                        <option value="6229">AUXILIAR DE RAYOS X</option>
                        <option value="7225">ALBAÃ‘IL</option>
                        <option value="7227">CARPINTERO</option>
                        <option value="7229">SOLDADOR</option>
                        <option value="3161">ELECTRICISTA</option>
                        <option value="5227">OPERADOR DE ACUEDUCTO</option>
                        <option value="5229">OPERADOR DE MAQUINARIAS PESADAS</option>
                        <option value="5230">OPERADOR DE PLANTAS HIDROELECTRICAS</option>
                        <option value="6174">AUXILIAR DE AUTOPSIA</option>
                        <option value="6226">AUXILIAR DE LABORATORIO</option>
                        <option value="6230">AUXILIAR DE TERAPIA</option>
                        <option value="7226">AYUDANTE DE TOPOGRAFIA</option>
                        <option value="5252">MOTORISTA</option>
                        <option value="5253">MECANICO DE EQUIPOS MEDICOS</option>
                        <option value="7253">INSPECTOR AUXILIAR DE OBRAS</option>
                        <option value="8250">ESCOLTA</option>
                        <option value="6274">AUXILIAR DE ENFERMERIA (ENFERMERO) (A)</option>
                        <option value="1279">CAPORAL</option>
                        <option value="5274">MECANICO DE MOTORES DIESEL</option>
                        <option value="5275">MECANICO DE AVIACION</option>
                        <option value="7274">ELECTRICISTA DE ALTA TENSION</option>
                        <option value="7275">ELECTROMECANICO</option>
                        <option value="0334">OBRERO OFICIAL</option>
                        <option value="7305">SUPERVISOR DE MANTENIMIENTO DE AREAS PUBLICA</option>
                        <option value="7303">SUPERVISOR DE SERVICIOS INTERNOS</option>
                        <option value="5301">SUPERVISOR DE PLANTA HIDROELECTRICA</option>
                        <option value="7606">SUPERVISOR DE TRANSPORTE</option>
                        <option value="8350">SUPERVISOR DE SERVICIOS DE SEGURIDAD</option>
                        <option value="8350">SUPERVISOR DE SERVICIOS ESPECIALES</option>
                        <option value="0041">COMISIONADO</option>
                        <option value="1596">SEC.POLITICA Y ASUNTOS FRONT.</option>
                        <option value="0694">JEFE DE OFICINA III</option>
                        <option value="0455">PROMOTOR COMUNITARIO</option>
                        <option value="1596">SEC.POLITICA Y ASUNTOS FRONT.</option>
                        <option value="0694">JEFE DE OFICINA III</option>
                        <option value="0090">COMISIONADO ESPECIAL</option>
                        <option value="0110">COORDNDR D DSPLIEGUE COMNCACINL ADSCRT A (SICOAMA)</option>
                        <option value="0374">ADJ. DE ASUNTOS CIVILES Y POLITICA</option>
                        <option value="7110">CUSTODIO</option>
                        <option value="0011">GOBERNADOR DEL ESTADO</option>
                        <option value="7402">COMISIONADO MUNICIPIO AUTONOMO MANAPIARE</option>
                        <option value="7324">JEFE DE PARTICIPACION Y ATENCION SOCIAL</option>
                        <option value="1067">DIRECTOR(A) DE LA CLINICA JOSE MARIA VARGAS</option>
                        <option value="7333">JEFE DE SRVICIOS PUBLICOS(MANAPIARE)</option>
                        <option value="0960">ABOGADO ASESOR</option>
                        <option value="0740">JEFE III OFICINA DE ATENCION AL SOBERANO</option>
                        <option value="0083">COORDINADOR</option>
                        <option value="7350">JEFE DE PARTIC.POPULAR Y ATENCION SOCIAL ATABAPO</option>
                        <option value="7403">COMISIONADO DEL EJE CARRETERO SUR</option>
                        <option value="0446">ADJ. SECRETARIA DE PROTECCION SOCIAL</option>
                        <option value="7321">JEFE DE ECONOMIA PRODUCTIVA</option>
                        <option value="7328">JEFE DE ECONOMIA(MANAPIARE)</option>
                        <option value="9064">JEFE DE CULTURA DE RIO NEGRO</option>
                        <option value="7343">JEFE DE ECONOMIA PRODUCTIVA (PARHUAZA)</option>
                        <option value="7323">JEFE DE SERVICIOS PUBLICOS</option>
                        <option value="7342">JEFE DE PART POPULAR Y ATEN SOCIAL DEL EJE NORTE</option>
                        <option value="7308">JEFE DEGESTION HUMANA EJE C. SUR-ESTE</option>
                        <option value="7307">JEFE DE ASUNTOS INDIGENAS EJE C. SUR-ESTE</option>
                        <option value="0437">ADJ.SECRETARIA DE TURISMO</option>
                        <option value="7346">JEFE DE CULTURA</option>
                        <option value="0445">DIRECTOR(A) CONSULTORIA JURIDICA</option>
                        <option value="9063">ADJ. DE LA CLINICA JOSE MARIA VARGAS</option>
                        <option value="0057">SECRET. EJECUT. DE SERV. Y MANT. COM.</option>
                        <option value="7349">JEFE DE ASUNTO INDIGENAS DE LA COMISIONADURIA</option>
                        <option value="0158">JEFE DE LA OFICINA G/P DE LA SECRETARIA GENERAL</option>
                        <option value="7340">JEFE DE ASUNTOS INDIGENA RIO NEGRO</option>
                        <option value="7338">JEFE DE PARTI POPU Y ATENCION SOCIAL(RIO NEGRO)</option>
                        <option value="9053">COORDINADOR DE PROPAGANDA SICOAMA</option>
                        <option value="7337">JEFE DE PARTICIPACION COMUNITARIA</option>
                        <option value="7344">JEFE DE GESTION HUMANA DE LA COMISIONADURIA ESP</option>
                        <option value="7329">JEFE DE CULTURA(MANAPIARE)</option>
                        <option value="7334">JEFE DE ASUNTOS INDIGENAS(MANAPIARE)</option>
                        <option value="1676">JEFE DE ECONOMIA PROD DE LA COMIS TERR DEL EJE SUR</option>
                        <option value="9034">COMISIONADO DEL DESPACHO</option>
                        <option value="7322">JEFE DE DEPORTE</option>
                        <option value="9028">GUARDIA PATRIMONIAL</option>
                        <option value="9057">ADJUNTO DE LA CLINICA POPULAR DR. JOSE MARIA VARAS</option>
                        <option value="9055">ADJUNTO DE LA SEC. EJEC. DE SERVC. Y MANTENIMIENTO</option>
                        <option value="7339">JEFE DE PROMOCION SOCIAL, ADSCRITO A LA SCR DE PAR</option>
                        <option value="7320">COORDINADOR(A) EJE SUR ADSCRITO A LA SEC. DE TURIS</option>
                        <option value="7332">JEFE DE GESTION HUMANA(MANAPIARE)</option>
                        <option value="7325">JEFE DE SERVI PUBLI DEL EJE CARRETERO SUR-ESTE</option>
                        <option value="7348">JEFE DE PARTCIPCION POPULAR Y ATEN. SOCIAL PARHUZA</option>
                        <option value="9025">JEFA D COMUNICACION PPLR D L SECRE EJECTV SICOAMA</option>
                        <option value="7330">JEFE DE DEPORTE(MANAPIARE)</option>
                        <option value="7341">CORRDINADOR DE REDES SOCIALES</option>
                        <option value="7326">JEFE DE LA RESIDENCIA DEL GOBERNADOR</option>
                        <option value="0004">JEFE III DE LA OFICINA DE ATENCION AL CIUDADANO</option>
                        <option value="1689">COORDINADOR DE AUDIO VISUAL DE SICOAMA</option>
                        <option value="7336">JEFE DE DEPORTE DEL EJE SUR_ESTE</option>
                        <option value="0394">FUNCIONARIO (A) DE UVIRPA</option>
                        <option value="7312">COORDINADOR DE PROTOCOLO SEC. DE LA JUVENTUD</option>
                        <option value="7331">JEFE DE PARTICIPACION POPU Y ATEN SOC(MANAPIARE)</option>
                        <option value="7309">JEFE DE CULTURA EJE C. SUR-ESTE</option>
                        <option value="9073">COOR. DE INNOVACION Y PRODUCCION DEL S.E.J.E.U</option>
                        <option value="7345">JEFE DE SERVICIOS PUBLICOS (PARHUAZA)</option>
                        <option value="7347">JEFE DE DEPORTE (PARHUAZA)</option>
                        <option value="0690">JEFE DE OFICINA III</option>
                        <option value="0609">PENDIENTE</option>
                        <option value="7351">PENDIENTE</option>

                    </select>
                </div>
            </div>
            <!-- Instrucción Académica -->
            <div class="row mb-3">
                <label for="instruccion_academica" class="col-sm-2 col-form-label">Instrucción Académica</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="instruccion_academica" name="instruccion_academica">
                </div>
            </div>
            <!-- Años en la Administración Pública -->
            <div class="row mb-3">
                <label for="anos_administracion_publica" class="col-sm-2 col-form-label">Años en la Administración Pública</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="anos_administracion_publica" name="anos_administracion_publica">
                </div>
            </div>
            <!-- Nacionalidad -->
            <div class="row mb-3">
                <label for="nacionalidad" class="col-sm-2 col-form-label">Nacionalidad</label>
                <div class="col-sm-10">
                    <select class="form-control" id="nacionalidad" name="nacionalidad">
                        <option value="">Seleccione</option>
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select>
                </div>
            </div>
            <!-- Estado Civil -->
            <div class="row mb-3">
                <label for="estado_civil" class="col-sm-2 col-form-label">Estado Civil</label>
                <div class="col-sm-10">

                    <select class="form-control" id="estado_civil" name="estado_civil">
                        <option value="">Seleccione</option>
                        <option value="Soltero/a">Soltero/a</option>
                        <option value="Casado/a">Casado/a</option>
                        <option value="Divorciado/a">Divorciado/a</option>
                        <option value="Viudo/a">Viudo/a</option>
                    </select>
                </div>
            </div>
            <!-- Pueblo Indígena -->
            <div class="row mb-3">
                <label for="pueblo_indigena" class="col-sm-2 col-form-label">Pueblo Indígena</label>
                <div class="col-sm-10">
                    <select class="form-control" id="pueblo_indigena" name="pueblo_indigena">
                        <option value="">Seleccione</option>
                        <option value="Ninguno">Ninguno</option>
                        <option value="Baniva">Baniva</option>
                        <option value="Bare">Bare</option>
                        <option value="Cubeo">Cubeo</option>
                        <option value="Curripaco">Curripaco</option>
                        <option value="Eñapa">Eñapa</option>
                        <option value="Guanano">Guanano</option>
                        <option value="Hotti">Hotti</option>
                        <option value="Inga">Inga</option>
                        <option value="Jivi">Jivi</option>
                        <option value="Piapoco">Piapoco</option>
                        <option value="Piaroa">Piaroa</option>
                        <option value="Puinave">Puinave</option>
                        <option value="Saliva">Saliva</option>
                        <option value="Sanema">Sanema</option>
                        <option value="Warequena">Warequena</option>
                        <option value="Yabarana">Yabarana</option>
                        <option value="Yanomami">Yanomami</option>
                        <option value="Yavitero">Yavitero</option>
                        <option value="Yecuana">Yecuana</option>
                        <option value="Yeral">Yeral</option>
                    </select>
                </div>
            </div>
            <!-- Sexo -->
            <div class="row mb-3">
                <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sexo" name="sexo">
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>
            </div>
            <!-- Discapacidad -->
            <div class="row mb-3">
                <label for="discapacidad" class="col-sm-2 col-form-label">Discapacidad</label>
                <div class="col-sm-10">

                    <div class="col-sm-10">
                        <select class="form-control" id="discapacidad" name="discapacidad">
                            <option value="">Seleccione</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Número de Teléfono -->
            <div class="row mb-3">
                <label for="telefono" class="col-sm-2 col-form-label">Número de Teléfono</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="telefono" name="telefono" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11">
                </div>
            </div>
            <!-- Correo Electrónico -->
            <div class="row mb-3">
                <label for="correo_electronico" class="col-sm-2 col-form-label">Correo Electrónico</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">
                </div>
            </div>
            <!-- Comuna -->
            <div class="row mb-3">
                <label for="comuna" class="col-sm-2 col-form-label">Comuna</label>
                <div class="col-sm-10">

                    <select class="form-control" id="comuna" name="comuna">
                        <option value="">Seleccione</option>

                        <?php foreach ($countries55 as $c) : ?>
                            <option value="<?php echo $c->id_Comuna; ?>"><?php echo $c->nombre_comuna; ?></option>
                        <?php endforeach; ?>


                    </select>
                </div>
            </div>
            <!-- Comunidad -->
            <div class="row mb-3">
                <label for="comunidad" class="col-sm-2 col-form-label">Comunidad</label>
                <div class="col-sm-10">
                    <select class="form-control" id="comunidad" name="comunidad">
                        <option value="">Seleccione</option>
                    </select>
                </div>
            </div>
            <!-- Calle -->
            <div class="row mb-3">
                <label for="calle" class="col-sm-2 col-form-label">Calle</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="calle" name="calle">
                </div>
            </div>
            <!-- Carga Familiar -->
            <div class="row mb-3">
                <label for="carga_familiar" class="col-sm-2 col-form-label">Carga Familiar</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="carga_familiar" name="carga_familiar">
                </div>
            </div>
            <!-- Hijos Menores de 18 Años -->
            <div class="row mb-3">
                <label for="hijos_menores" class="col-sm-2 col-form-label">Hijos Menores de 18 Años</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="hijos_menores" name="hijos_menores">
                </div>
            </div>
            <!-- Beca -->
            <div class="row mb-3">
                <label for="beca" class="col-sm-2 col-form-label">Beca</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="beca" name="beca">
                </div>
            </div>
            <!-- Ubicación Administrativa -->
            <div class="row mb-3">
                <label for="ubicacion_administrativa" class="col-sm-2 col-form-label">Ubicación Administrativa</label>
                <div class="col-sm-10">
                    <select class="form-control chosen-select" id="ubicacion_administrativa" name="ubicacion_administrativa">
                        <option value="">Seleccione</option>
                        <option value="01.01.51">CONSEJO LEGISLATIVO</option>
                        <option value="01.02.51">CONTRALORIA GENERAL DEL ESTADO</option>
                        <option value="01.03.51">PROCURADORIA GENERAL</option>
                        <option value="01.04.51">SECRETARIA DEL DESPACHO DEL GOBERNADOR YSECRETARIA DE LA GESTION PUBLICA</option>
                        <option value="01.04.52">SECRETARIA EJECUTIVA</option>
                        <option value="01.04.53">CONTRATACIONES PUBLICAS</option>
                        <option value="01.04.54">ASESORIA JURIDICA</option>
                        <option value="01.05.51">SECRETARIA GENERAL DE GOBIERNO</option>
                        <option value="01.05.52">SERVICIOS DE INFORMACION Y CUSTODIA DE DOCUMENTOS</option>
                        <option value="01.05.53">ASESORAMIENTO JURIDICO</option>
                        <option value="01.05.54">ASUNTOS POLITICOS</option>
                        <option value="01.05.55">OFICINA DEL FONDO DE COMPENSACION INTERRITORIAL</option>
                        <option value="01.06.51">SECRETARIA EJECUTIVA DE GESTION HUMANO</option>
                        <option value="01.06.52">RECLUTAMIENTO Y SELECCION Y EVALUACION DE PERSONAL</option>
                        <option value="01.06.53">REGISTRO Y CONTROL</option>
                        <option value="01.06.54">PREVISION SOCIAL</option>
                        <option value="01.06.55">RELACIONES LABORALES</option>
                        <option value="01.06.56">AUDITORIA, CONTROL Y FISCALIZACION LABORAL</option>
                        <option value="01.06.57">SEGURO SOCIAL</option>
                        <option value="01.06.58">ELABORACION PROCESAMIENTO Y GENERACION DE NOMINAS</option>
                        <option value="01.07.51">SECRETARIA DE PLANIFICACION, PROYECTO Y PRESUPUESTO</option>
                        <option value="01.07.52">FORMULACION Y EVALUACION PRESUPUESTARIA</option>
                        <option value="01.07.53">CONTROL Y EJECUCION PRESUPUESTARIA</option>
                        <option value="01.07.54">PLANIFICACION Y EVALUACION DE PROYECTOS</option>
                        <option value="01.07.55">INFORMATICA</option>
                        <option value="01.08.51">SERVICIOS DE ADMINISTRACION</option>
                        <option value="01.08.52">SERVICIOS CONTABLES</option>
                        <option value="01.08.53">SERVICIOS DE COMPRAS Y SUMINISTROS</option>
                        <option value="01.08.54">OFICINA DE BINES Y SERVICIOS</option>
                        <option value="01.09.51">TESORERIA</option>
                        <option value="01.09.52">SERVICIOS CONTABLES DEL TESORO</option>
                        <option value="01.09.53">UNIDAD DE ORDENAMIENTO DE PAGO</option>
                        <option value="01.09.54">SERVICIO DE APOYO FISCAL</option>
                        <option value="01.10.51">SECRETARIA EJECUTIVA INDIGENA</option>
                        <option value="01.11.51">AUDITORIA INTERNA</option>
                        <option value="01.11.52">OFICINA DE CONTROL POSTERIOR</option>
                        <option value="01.11.53">OFICINA DE DETERMINACION DE RESPONSABILIDAD</option>
                        <option value="01.13.51">SECREATARIA EJECUTIVA DE BIENES Y SERVICIOS</option>
                        <option value="01.13.52">OFICINA DE REGISTRO Y CONTROL DE BIENES MUEBLES E INMUEBLES</option>
                        <option value="01.13.53">OFICINA DE CONTABILIDAD</option>
                        <option value="01.13.54">OFICINA DE INVENTARIOS</option>
                        <option value="01.13.55">SEGURIDAD Y VIGILANCIA</option>
                        <option value="02.01.51">COORDINACION DE SERVICIOS POLICIALES</option>
                        <option value="02.01.52">CIRMIL</option>
                        <option value="02.02.51">SECRETARIA DE POLITICA DE ASUNTOS FRONTERIZOS</option>
                        <option value="02.03.51">PROTECCION CIVIL</option>
                        <option value="02.04.51">PREVENCION Y CONTROL DE SINIESTRO (BOMBEROS)</option>
                        <option value="06.01.51">SECREATARIA DE TURISMO</option>
                        <option value="06.01.52">OPERADORES TURISTICO Y EMPRENDEDORES</option>
                        <option value="06.01.53">PROMOCION Y COMUNICACIÓN</option>
                        <option value="06.01.54">INSPECTOR DE TURISMO</option>
                        <option value="08.02.52">JUBILADOS Y PENSIONADOS DE EDUCACION</option>
                        <option value="09.03.51">SEC. EJEC. PARA LA ATENCION DE LA JUVENTUD Y ESTUDIANTE UNIVERSITARIO</option>
                        <option value="10.03.52">ASUNTOS DE LA JUVENTUD</option>
                        <option value="11.03.53">JEFATURA DE LOS ESTUDIANTES</option>
                        <option value="12.03.54">ORIENTACION Y PREVENCION A LOS ESTUDIANTES</option>
                        <option value="09.01.51">SEC. EJEC.DEL SISTEMA DE INFOR. COM. ( SICOAMA)</option>
                        <option value="09.01.52">JEFATURA DE PRENSA</option>
                        <option value="09.01.53">JEFATURA COMUNICACIÓN DIGITAL</option>
                        <option value="09.01.54">JEFATURA DE DISEÑO Y PUBLICIDAD</option>
                        <option value="09.01.55">OFICINA DE REDES SOCIALES</option>
                        <option value="09.02.51">ADMINISTRACION DE I.A.B.N-GOBERNACION</option>
                        <option value="09.03.51">SECRETARIA DE CULTURA</option>
                        <option value="09.03.57">CONTRUCCION Y MEJORAMIENTO DE OBRAS EN BINES PARA EL CULTURAL (FCI)</option>
                        <option value="11.01.51">SECRETARIA DE INFRAESTRUCTURA</option>
                        <option value="11.01.52">DIVISION DE SUPERVICION Y EVALUACION DE PROYECTO</option>
                        <option value="11.01.53">DIVISION DE INFORMATICA, REGISTRO Y CONTROL</option>
                        <option value="11.01.54">ASESORIA LEGAL</option>
                        <option value="11.02.57">CONTRUCCION Y MEJORAMIENTO DE OBRAS (FCI)</option>
                        <option value="12.01.51">ADMINISTRATIVOS MALARIOLOGIA-GOBERNACION</option>
                        <option value="12.01.52">CONTRATACION COLECTIVA OBREROS DE LA SALUD</option>
                        <option value="12.01.57">CONTRUCCION Y MEJORAS DE OBRAS EN BIENES PARA EL FORTALECIMIENTO DE LA SALUD (FCI)</option>
                        <option value="13.01.51">SECRETARIA Y COORDINACION</option>
                        <option value="13.01.52">JEFATRA DE SOLUCION DE CONFLICTOS</option>
                        <option value="13.01.53">GESTION COMUNAL</option>
                        <option value="13.01.54">FORMACION Y ASESORIA LEGAL</option>
                        <option value="13.04.51">PROTECCION SOCIAL</option>
                        <option value="13.04.52">PROGRAMAS SOCIALES</option>
                        <option value="13.04.53">ATENCION AL SERVIDOR PUBLICO</option>
                        <option value="13.04.54">GESTION INSTITUCIONAL</option>
                        <option value="14.01.51">CONTRATACION COLECTIVA DE EMPLEADOS</option>
                        <option value="14.01.52">CONTRATACION COLECTIVA DE OBREROS DE INFRAESTRUCTURA</option>
                        <option value="14.01.53">PENSIONADOS Y JUBILADOS</option>
                        <option value="14.01.54">CONTRATADOS GOBERNACION</option>
                        <option value="14.01.55">PERSONAL DIRECTIVO DE ALTO NIVEL Y JEFATURAS</option>
                        <option value="15.01.51">ENTES DESCENTRALIZADOS</option>

                    </select>
                </div>
            </div>
            <!-- Campo para Foto -->
            <div class="row mb-3">
                <label for="foto" class="col-sm-2 col-form-label">Campo para Foto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/jpeg, image/png" capture="environment">
                </div>
            </div>


            <!-- Botón de Enviar -->
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
        <div id="responseMessage" class="mt-3"></div>
    </div>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });


        $(document).ready(function() {
            $(".form-control").on("input", function() {
                if ($(this).hasClass("border-danger")) {
                    $(this).removeClass("border-danger");
                }
            });
        });

        function validarCampo(campo) {
            var value = $("#" + campo).val();
            if (value.trim() == "") {
                $("#" + campo).addClass("border-danger");

                Toast.fire({
                    icon: "error",
                    title: "Hay campos vacíos"
                });
                return false;
            }
            return true;
        }


        $(document).ready(function() {
            $("#employeeForm").on('submit', function(event) {
                event.preventDefault();
                let errors = false

                if (!validarCampo('cedula')) {
                    errors = true
                }
                if (!validarCampo('apellidos_nombres')) {
                    errors = true
                }
                if (!validarCampo('fecha_ingreso')) {
                    errors = true
                }
                if (!validarCampo('cargo')) {
                    errors = true
                }
                if (!validarCampo('instruccion_academica')) {
                    errors = true
                }
                if (!validarCampo('anos_administracion_publica')) {
                    errors = true
                }
                if (!validarCampo('nacionalidad')) {
                    errors = true
                }
                if (!validarCampo('estado_civil')) {
                    errors = true
                }
                if (!validarCampo('pueblo_indigena')) {
                    errors = true
                }
                if (!validarCampo('sexo')) {
                    errors = true
                }
                if (!validarCampo('discapacidad')) {
                    errors = true
                }
                if (!validarCampo('telefono')) {
                    errors = true
                }
                if (!validarCampo('correo_electronico')) {
                    errors = true
                }
                if (!validarCampo('comuna')) {
                    errors = true
                }
                if (!validarCampo('comunidad')) {
                    errors = true
                }
                if (!validarCampo('calle')) {
                    errors = true
                }
                if (!validarCampo('carga_familiar')) {
                    errors = true
                }
                if (!validarCampo('hijos_menores')) {
                    errors = true
                }
                if (!validarCampo('beca')) {
                    errors = true
                }
                if (!validarCampo('ubicacion_administrativa')) {
                    errors = true
                }

                if (errors) {
                    return
                }

                // valida el campo foto que es tipo file
                const archivoInput = document.getElementById('foto');

                if (archivoInput.files.length === 0) {
                    Toast.fire({
                        icon: "error",
                        title: "Por favor, seleccione una foto."
                    });
                    return false; // Evita que se envíe el formulario
                }





                var formData = new FormData(this);

                $.ajax({
                    url: 'back/backend.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response)
                        let rsult = JSON.parse(response)

                        if (rsult.success) {

                            Swal.fire({
                                title: "Exito",
                                text: rsult.success,
                                icon: "success"
                            });

                            $(this).find('#cargo').val('').trigger("chosen:updated"); // Actualiza Chosen después de seleccionar el valor
                            $(this).find('#ubicacion_administrativa').val('').trigger("chosen:updated"); // Actualiza Chosen después de seleccionar el valor

                            $('#employeeForm')[0].reset(); // Vaciar el formulario

                        } else {
                            Swal.fire({
                                title: "Error",
                                text: rsult.error,
                                icon: "error"
                            });

                        }

                    },
                    error: function() {

                        Swal.fire({
                            title: "Error",
                            text: "Error al enviar el formulario.",
                            icon: "error"
                        });
                    }
                });
            });
        });



        $('.chosen-select').chosen({}).change(function(obj, result) {
            console.debug("changed: %o", arguments);
        })







        $(document).ready(function() {
            $("#comuna").change(function() {
                $.get("select/selec_comunidad.php", "comuna=" + $("#comuna").val(), function(data) {
                    $("#comunidad").html(data);
                });
            });
        });
    </script>
</body>

</html>