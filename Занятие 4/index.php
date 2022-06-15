<? 
$data = require_once('datainfo.php');
$startData = $data['about'];
$arrayData = $data['contacts'];
$achiveData = $data['myachive'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Мое резюме</title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
  <script src="js/slides.js" defer></script>
  <script type="text/javascript" defer>
    let userName = prompt("Как Вас зовут?", "Имя");
        function showMessage() {
            let message = 'Привет, ' + userName;
            alert(message);
        }
        showMessage();
  </script>
  
</head>
<body>

  <button id="toggle-theme-btn"><input type="image" src="images/moon.png" alt="здесь был вася" id="toggle-theme-image"></button>

  <div class="header">
     <h1>Мое резюме</h1>
     <div class="menu">
      <ul>
        <li><a href="#aboutme">Обо мне</a></li>
        <li><a href="#myachievements">Мои достижения</a></li>
        <li><a href="#contacts">Мои контакты</a></li>
      </ul>
    </div>      
  </div>
  <div class="slides">
    <img src="images/nature1.jpeg" class="block" alt="Первая">
    <img src="images/nature2.jpg" alt="Вторая">
    <img src="images/nature3.jpg" alt="Последняя">
    <img src="images/rocket.png"  alt="Самая последняя">
  </div>
  <button class="btnSlide">Сменить изображение</button>
  

<div class="container"> 
    <div class="photo">
      <a href="https://gb.ru" target="_blank"><input type="image" src="images/rocket.png" alt="best photo" ></a>
  </div>
    <div class="content">
      
      <h2 class="titleblog" id="aboutme">Обо мне:</h2>
          
      <p><?=$startData['hello'] ?></p>
      <p><?=$startData['myname'] ?></p>
      <p><?=$startData['info'] ?></p>
      <p><?=$startData['hobbies'] ?></p>
      <p><?=$startData['hobbies2'] ?></p>
      <p><?=$startData['history'] ?></p>
        
      <h2 class="titleblog" id="myachievements">Мои достижения:</h2>    
          <p><?=$achiveData['one']?></li></p>
          <p><?=$achiveData['two']?></p>
          <p><?=$achiveData['three']?></p>
          <p><?=$achiveData['four']?></p>
      <h2 class="titleblog" id="contacts">Мои контакты:</h2>
      <? foreach($arrayData as $value) {?>
      <p><?=$value['adress']?></p>
      <p><?=$value['email']?></p>
      <p><?=$value['tel']?></p>
    <? } ?>    
    </div>
   
    <div class="footer">
      <a class="copyright" href="gb.ru">Бла-бла-бла. Это мой блог. Все права защищены(c)</a>
      <a class="top" href="#top">Перейти вверх страницы</a>
  </div>

  
</body>
</html>