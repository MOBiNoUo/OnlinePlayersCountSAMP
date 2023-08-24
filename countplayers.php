<?php
// By GitHub.Com/MobinOuO
// From SA-MP wiki

$sIPAddr = "127.0.0.1"; // Your SA-MP Server IP(or HostName)
$iPort = 7777; // Your SA-MP Server Port
$sPacket = "";
$aIPAddr = explode('.', $sIPAddr);
$sPacket .= "SAMP";
$sPacket .= chr($aIPAddr[0]);
$sPacket .= chr($aIPAddr[1]);
$sPacket .= chr($aIPAddr[2]);
$sPacket .= chr($aIPAddr[3]);
$sPacket .= chr($iPort & 0xFF);
$sPacket .= chr($iPort >> 8 & 0xFF);
$sPacket .= 'c';
$rSocket = fsockopen('udp://'.$sIPAddr, $iPort, $iError, $sError, 2);
fwrite($rSocket, $sPacket);
echo fread($rSocket, 2048);
fclose($rSocket);
?>
