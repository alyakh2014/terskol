<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.12.2018
 * Time: 0:35
 */
if($_REQUEST['fio'] && $_REQUEST['phone']){

    $id = $_REQUEST['id'];
    $fio = $_REQUEST['fio'];
    $phone = $_REQUEST['phone'];
    $quantity = $_REQUEST['quantity'];
    $from = $_REQUEST['from'];
    $to = $_REQUEST['to'];
    $comment = $_REQUEST['comment'];
    $headers .= "Content-type: text/html; charset=\"utf-8\"\r\n";
    $headers .= "From: TERSKOL-HOME ";
    $message = "<div><b>ФИО:</b> $fio</div>
				<div><b>Телефон:</b> $phone</div>
				<div><b>Количество мест:</b> $quantity</div>
				<div><b>C:</b> $from по:</b> $to</div>
				<div><b>Комментарий:</b> $comment</div>
				";

    $sendSuccess = mail('ahkubekovalim@mail.ru', 'Новая ЗАЯВКА на ' . $id, $message, $headers);

    echo $sendSuccess ? 'success' : 'error';
} else {
    echo 'no-data';
}
