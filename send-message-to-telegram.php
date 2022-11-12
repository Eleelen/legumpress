<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['name']) && !empty($_POST['phone'])){
  if (isset($_POST['name'])) {
    if (!empty($_POST['name'])){
  $name = $_POST['name'];
  $nameFieldset = "Ім'я: ";
  }
}
 
if (isset($_POST['phone'])) {
  if (!empty($_POST['phone'])){
  $phone = $_POST['phone'];
  $phoneFieldset = "Телефон: ";
  }
}
if (isset($_POST['theme'])) {
  if (!empty($_POST['theme'])){
  $theme = $_POST['theme'];
  $themeFieldset = "Тема: ";
  }
}
$token = "1085947550:AAGdSt-knOYeJxFlYps-SKwA9sieG-kFPpI";
$chat_id = "-463617967";
$arr = array(
  $nameFieldset => $name,
  $phoneFieldset => $phone,
  $themeFieldset => $theme
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  
  echo "
            <html style='width:100%;height:100vh;background-image:url(./img/h.jpg);background-size:cover;background-repeat:no-repet;text-align:center;'>
            <div class='overlay' style='background: rgba(0,0,0,0.6);position: absolute;top: 0;left: 0;width: 100%;height: 100vh;z-index: 4;'>
                <div class='content' style='border:1px solid #fff;padding:20px;margin:100px;background-color:#ffffff4d;color:#fff;box-shadow: 0px 3px 18px #d5ceceb8;'>
                <p style='font-size:40px;font-weight:bold;'>Дякуємо за заявку!</p>
                <p style='font-size:30px'>Ми зв`яжемося з Вами найближчим часом для уточнення деталей!</p>
                </div>
                </div>
            </html>
            ";
    return true;
} else {
  echo '<p class="fail"><b>Помилка. Повідомлення не було відправлено!</b></p>';
}
} else {
  echo '<p class="fail">Помилка. Ви не заповнили обов`язкові поля!</p>';
}
} else {
header ("Location: /");
}
 
?>
</body>
</html>