<?php
 //Поля с формы
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $persons = $_POST['persons'];
 $checkin = $_POST['checkin'];
 $checkout = $_POST['checkout'];


 function parser($url){
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  if($result == false){     
    echo "Ошибка отправки запроса: " . curl_error($curl);
    return false;
  }
  else{
    return true;
  }
}


 //Кому
 $to = "Anesty2013@mail.ru";

 $from = $email;
 $subject = "Заявка с сайта Гостевой дом Анести";

 $msg="
 Имя: $name
 Номер телефона :$phone
 Количество персон :$persons
 Заезд :$checkin
 Выезд :$checkout;
 mail($to, $subject, $msg, "From: $from ");


 $token = "5889403966:AAEAJ1-iFEgg9TScDjF5ozW1rzqEM4R7pjQ";

  $chat_id = "-1227758676";
  parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}");


?>

