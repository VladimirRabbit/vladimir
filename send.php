<?php 
 $komment = $_POST['komment'];
 $fio = $_POST['fio'];
 $adress = $_POST['adress'];
 $email = $_POST['email'];
 $mobil = $_POST['mobil'];
 $file = $_POST['file'];

 $komment = htmlspecialchars($komment);
 $fio = htmlspecialchars($fio);
 $adress = htmlspecialchars($adress);
 $email = htmlspecialchars($email);
 $mobil = htmlspecialchars($mobil);
 $file = htmlspecialchars($file);
 if (strpos($email,'@gmail.com') != false) {echo ("Регистрация пользователя с таким почтовым адресом невозможна");} else {
    if (mail("cyii4uk2014@yandex.ru", "От: ".$email,"Комментарий: ".$komment."\r\n".
                                      "Фамилия: ".$fio."\r\n".
                                      "Адресс: ".$adress."\r\n".
                                      "email: ".$email."\r\n".
                                      "Мобильный телефон: ".$mobil."\r\n".
                                      "Файл: ".$file)) {
                                        echo ("Письмо отправлено");
                                      }
                                      else{echo ("Письмо не отправлено");}}
?>