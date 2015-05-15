<?php
// In case any of our lines are larger than 70 characters, we should use wordwrap()

$emailHeaders = 'From: Leiloes <no-reply@leiloes.gnomo.fe.up.pt>' . "\r\n";
$emailHeaders .= 'Reply-To: no-reply@leiloes.gnomo.fe.up.pt' . "\r\n";
$emailHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";




function sendEmailConfirmAccount($email,$hash){
    global $smarty, $emailHeaders;

    $smarty->assign("HASH_CODE",$hash);

    $message = wordwrap($smarty->fetch('texts/email-confirmaccount.tpl'), 70, "\r\n");

    mail($email, 'Confirma a tua conta no leilões', $message,$emailHeaders);
}


function sendEmailNewPassword($email,$hash){
    global $smarty, $emailHeaders;

    $smarty->assign("HASH_CODE",$hash);

    $message = wordwrap($smarty->fetch('texts/email-recoverpassword.tpl'), 70, "\r\n");

    mail($email, 'Redefinir palavra-passe', $message,$emailHeaders);
}






