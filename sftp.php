<?php
//error_reporting(E_ALL);
//ini_set('track_errors', '1');
//ini_set('display_errors', '1');
$ftp_protocol="sftp";
/*
    $ftp_user_name="consulta";
    $ftp_user_pass="Claro.2019";
    $ftp_server="172.24.43.87";
    $ftp_path="home/usergevenue/NotificacionesPush/";
*/
    $ftp_user_name="claroadmin";
    $ftp_user_pass="Cl4r04Dmin2019";
    $ftp_server="10.2.0.11";
    $ftp_path="home/claroadmin/";

    echo "Trying to connect using:\n\n";
    echo "Host: $ftp_server\n";
    echo "User: $ftp_user_name\n";
    echo "Pass: $ftp_user_pass\n";
    echo "Path: /$ftp_path\n\n";

    $ftp_url = $ftp_protocol."://".$ftp_server."/".$ftp_path;

    $log["reqXML"] =  $ftp_user_name.":".$ftp_user_pass;
    $log["url"] = $ftp_url;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $ftp_url);
    curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_SFTP);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERNAME, $ftp_user_name);
    curl_setopt($ch, CURLOPT_USERPWD, $ftp_user_name.":".$ftp_user_pass);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_SSH_HOST_PUBLIC_KEY_MD5, "4be740b42e9539d9a261939d938ae050");
    curl_setopt($ch, CURLOPT_SSH_AUTH_TYPES, CURLSSH_AUTH_PASSWORD);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_FTPLISTONLY, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);

    //print_r(curl_errno($ch));
    //print_r(curl_error($ch));

    $log["resXML"] = $data;
    $log["errorSFTP"][] = curl_strerror(curl_errno($ch));
    $log["errorSFTP"][] = curl_error($ch);
    curl_close($ch);
    if(isset($data)){
        $log["response"] = $data;
        $log["isError"] = 0;
    }else{
        $log["response"] = $data;
        $log["isError"] = 1;
    }

    $respuesta["dataRes"]=$data;
    print_r($log);
  //  debug_backtrace();
?>

