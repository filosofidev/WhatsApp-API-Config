<?php
/**
 * Copyright (C) 2023 Tangguh Filosofi Ugra Negarawan, S.T. (filosofidev@gmail.com)
 *
 */
/* WhatsApp API config */
$wa_no = $_SESSION['receipt_record']['memberPhone'];
function sendMessage($wa_no, $wa_text) {
    $url = 'https://api.sman1cepu.sch.id/send';
    $ch = curl_init($url);
    $nohp= $wa_no;
    $pesan= $wa_text;
    $data = array(
        'device_id' => '3b406fa2eb5a1dd20f6e7d81e846jtql', //id device yang terkoneksi dengan aplikasi whatsapp
        'number' => $nohp,
        'message' => $pesan,
        //'file' => 'https://urlgambar-file',
    );
    $payload = $data;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    //echo $result;
    }
?>