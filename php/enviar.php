<?php

$numero = isset($_POST['numero']) ? $_POST['numero'] : "";
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";


if (empty($numero) || empty($mensaje)) {
    throw new Exception("El número de teléfono y el mensaje son requeridos.");
}

try {
    $url = 'https://api103.hablame.co/api/sms/v3/send/marketing';
    $headers = array(
        'Accept: application/json',
        'Account: 10026569', // Reemplaza con tu cuenta
        'ApiKey: YXCfnrzOF1N0rSsZXY8jNoUrcRWmsw', // Reemplaza con tu clave de API
        'Content-Type: application/json',
        'Token: 675b1c658bfb02dfcda3e1f97ee7af81' // Reemplaza con tu token
    );

    $data = array(
        "toNumber" => $numero,
        "sms" => $mensaje,
        "flash" => "0",
        "sc" => "890202",
        "request_dlvr_rcpt" => "0",
        "sendDate" => "string"
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if ($response === false) {
        // Manejar el error de solicitud
        echo 'Error al procesar envio';
    } else {
        // Manejar la respuesta exitosa de la API
        echo 1;
    }

    // Decodificar la respuesta JSON recibida
    $responseData = json_decode($response, true);

    // Verificar si la respuesta se decodificó correctamente
    if ($responseData === null) {
        echo "Error al decodificar la respuesta JSON";
    } else {
        // Analizar y mostrar los datos de la respuesta
        // echo "Estado: " . $responseData['status'] . "<br>";
        // echo "Cuenta: " . $responseData['account'] . "<br>";
        // echo "ID de SMS: " . $responseData['smsId'] . "<br>";
        // echo "Tiempo de ejecución: " . $responseData['execution_time'] . " segundos<br>";
        // echo "IP: " . $responseData['ip'] . "<br>";
    }


    curl_close($ch);
} catch (Exception $e) {

    // Manejar cualquier excepción ocurrida
    echo "Error: " . $e->getMessage();
}
