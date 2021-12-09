<?php session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>">
   <link rel="shortcut icon" href="img/3.ico" type="image/x-icon">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
   <title>Mos.Эвакуатор</title>
</head>

<body>
   <?php if (isset($_SESSION['message'])) { ?>
      <div class="zatm">
         <p class="otpr"><?php echo $_SESSION['message']; ?><i class="far fa-times-circle fa-2x"></i></p>
      </div>
   <?php  }
   unset($_SESSION['message']); ?>
   <div class="progresbar">
      <div class="progresbarline"></div>
   </div>
   <section id="gav" class="section">
      <div class="header">
         <div class="menu">
            <img class="logotip" src="img/iconka.png" width="150" alt="Логотип">
            <a class="tel" href="tel:+79773543162"><img class="telefon" src="img/job_icon.png" width="95" height="80" alt="круглосуточно">
               <p class="telek">8 (977) 354-31-62<br>
                  круглосуточно
               </p>
            </a>
            <div class="glavburg">
               <div class="burger">
                  <div class="pidor"></div>
                  <span class="spanik"></span>
               </div>
               <nav class="nav">
                  <ul class="list">
                     <li class="link"><a class="yakor" href="#onasa">О нас</a></li>
                     <li class="link"><a class="yakor" href="#uslu">Услуги</a></li>
                     <li class="link"><a class="yakor" href="#kontakt">Контакты</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div class="container containerone">
         <div class="forma">
            <div class="reforma">
               <h1>Вызвать эвакуатор в Москве и МО</h1>
               <form action="send.php" method="post">
                  <div class="crop">
                     <div class="inputana">
                        <div class="popa">
                           <input type="text" name="namer" placeholder="Ваше имя" required>
                           <input type="tel" class="tel" placeholder="+7(XXX) XXX-XX-XX" name="phone" required>
                        </div>
                        <div class="jopa">
                           <input type="text" name="otkuda" placeholder="Откуда" required>
                           <input type="text" name="kuda" placeholder="Куда" required>
                        </div>
                     </div>
                  </div>
                  <div class="rido">
                     <p class="blick">Заблокировано колес</p>
                     <div class="rado">
                        <div class="formradio">
                           <input id="radio-0" type="radio" name="radio" value="0" checked>
                           <label for="radio-0">0</label>
                        </div>
                        <div class="formradio">
                           <input id="radio-1" type="radio" name="radio" value="1">
                           <label for="radio-1">1</label>
                        </div>
                        <div class="formradio">
                           <input id="radio-2" type="radio" name="radio" value="2">
                           <label for="radio-2">2</label>
                        </div>
                        <div class="formradio">
                           <input id="radio-3" type="radio" name="radio" value="3">
                           <label for="radio-3">3</label>
                        </div>
                        <div class="formradio">
                           <input id="radio-4" type="radio" name="radio" value="4">
                           <label for="radio-4">4</label>
                        </div>
                     </div>
                  </div>
                  <div class="vibor">
                     <p class="blick">Что перевезти?</p>
                     <select name="machine" id="mySelect">
                        <option class="optional" selected disabled value="vibor">Выбрать</option>
                        <option class="optional" value="Легковой автомобиль">Легковое авто</option>
                        <option class="optional" value="Мотоцикл">Мотоцикл</option>
                        <option class="optional" value="Джип">Джип</option>
                        <option class="optional" value="Кроссовер">Кроссовер</option>
                        <option class="optional" value="Микроавтобус">Микроавтобус</option>
                        <option class="optional" value="Спецтехника">Спецтехника</option>
                     </select>
                  </div>
                  <div class="ruler">
                     <p class="blick">Руль заблокирован?</p>
                     <div class="rul">
                        <div class="formrul">
                           <input id="da" type="radio" name="rule" value="нет" checked>
                           <label for="da">Нет</label>
                        </div>
                        <div class="formrul">
                           <input id="net" type="radio" name="rule" value="да">
                           <label for="net">Да</label>
                        </div>
                     </div>
                  </div>
                  <div class="rovno">
                     <textarea class="textar" name="voditelu" cols="50" rows="5" placeholder="Оставить комментарий водителю"></textarea>
                  </div>
                  <div class="raschet">Примерная стоимость:<br>
                     <p class="stoit"></p>
                  </div>
                  <button class="btn" type="submit">Вызвать</button>

               </form>
            </div>
         </div>
      </div>
   </section>
   <section id="onasa" class="sectiontwo">
      <div class="container">
         <div class="primushestva">
            <div class="onastop">
               <ul class="listing">
                  <li class="linking animateelem"><img src="img/3.svg" width="175" height="175" alt="Скорость подачи">
                     <div class="divik">
                        <span>ГАРАНТИРУЕМ</span><br>
                        <p>профессионализм и самую быструю подачу автомобиля (20-30 минут).</p>
                     </div>
                  </li>
                  <li class="linking animateelem"><img src="img/1.svg" width="175" height="175" alt="Доступность цены">
                     <div class="divik">
                        <span>Недорогие цены</span>,<br>
                        <p>Наши тарифы в среднем на 20% ниже, чем у большинства конкурентов. Убедитесь сами!</p>
                     </div>
                  </li>
                  <li class="linking animateelem"><img src="img/2.svg" width="175" height="175" alt="Работа круглосуточно">
                     <div class="divik"><span>Круглосуточная работа</span><br>
                        <p>Вы можете вызвать эвакуатор в любое время суток, при любой погоде и дорожной ситуации.</p>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="onas">
               <span class="animateelem">О нас</span><br>
               <p class="animateelem">Наша служба осуществляет круглосуточную эвакуацию автомобилей,
                  мотоциклов и спецтехники по лучшим тарифам в регионе.
                  Техника дежурит во всех районах Москва и большинстве городов близ Москва,
                  поэтому время подачи составляет в среднем 20-30 минут.</p>
               <a href="tel:+79773543162" class="btn animateelem">Вызвать</a>
            </div>
         </div>
      </div>
   </section>
   <section class="sectionpromej">
      <div class="one">
         <div class="oneone">
            <p class="animateelem">Скидка 10%<br><span class="animateelem">на предварительный заказ</span></p>
            <form class="animateelem" action="#" method="post">
               <input type="tel" class="tel" placeholder="+7(XXX) XXX-XX-XX" name="phone">
               <button class="btn" type="submit">Заказать</button>
            </form>
         </div>
      </div>
      <div class="two">
         <div class="twotwo">
            <p class="animateelem">Спешите!<br><span class="animateelem">Спешите!До конца акции осталось:</span></p>
            <div class="time animateelem">
               <div class="chasi">00</div>:<div class="minutes">00</div>:<div class="second">00</div>
            </div>
         </div>
      </div>
   </section>
   <section id="uslu" class="sectionthree">
      <div class="container containerthree">
         <p class="uslugi animateelem">Наши услуги и цены за данные <span>услуги</span></p>
         <div class="ceni">
            <a href="#gav" class="usluga animateelem yakor legk">
               <img src="img/legkovoi.jpg" alt="">
               <div class="machine"><span>Эвакуация легкового автомобиля от<span> 2500 руб.</span></span></div>
            </a>
            <a href="#gav" class="usluga animateelem yakor djip">
               <img src="img/vnedorozhnik.jpg" alt="">
               <div class="machine"><span>Эвакуация джипа<br>от<span> 3500 руб.</span></span></div>
            </a>
            <a href="#gav" class="usluga animateelem yakor moto">
               <img src="img/moto.jpg" alt="">
               <div class="machine"><span>Эвакуация мотоциклов<br>от<span> 2500 руб.</span></span></div>
            </a>
            <a href="#gav" class="usluga animateelem yakor gazel">
               <img src="img/gazele.jpg" alt="">
               <div class="machine"><span>Эвакуация микроавтобуса<br>от<span> 4000 руб.</span></span></div>
            </a>
            <a href="#gav" class="usluga animateelem yakor cros">
               <img src="img/adzlwa8x24s (1).jpg" alt="">
               <div class="machine"><span>Эвакуация кроссовера<br>от<span> 3000 руб.</span></span></div>
            </a>
            <a href="#gav" class="usluga animateelem yakor spec">
               <img src="img/spec.jpg" alt="">
               <div class="machine"><span>Эвакуация спецтехники<br>от<span> 5000 руб.</span></span></div>
            </a>
         </div>
      </div>
   </section>
   <section id="kontakt" class="sectionfour">
      <div class="container containerfour">
         <p class="kontakt animateelem">Нам вы можете написать или позвонить на ниже указанные <span>контакты</span></p>
         <p class="podkontakt animateelem">Наши операторы ответят на ваше обращение в кратчайшие сроки</p>
         <div class="icona animateelem">
            <a href="https://api.whatsapp.com/send?phone=79773543162"><i class="fab fa-whatsapp-square fa-8x fa-4x"></i></a>
            <a href="https://t.me/igorkasu"><i class="fab fa-telegram fa-8x fa-4x"></i></a>
            <a href="mailto:89773543162vlg@mail.ru"><i class="far fa-envelope fa-8x fa-4x"></i></a>
         </div>
      </div>
   </section>
   <footer class="footer">
      <div class="container containerfive">
         <a href="#"><img src="img/iconka.png" width="150" alt="Логотип"></a>
         <div class="poebota">
            <p>Email:<a href="mailto:89773543162vlg@mail.ru">89773543162vlg@mail.ru</a></p>
            <a href="tel:+79773543162">8 (977) 354-31-62 <br>Круглосуточно</a>
         </div>
      </div>
   </footer>
   <script src="js/main.js?<?php echo time(); ?>"></script>
   <script src="https://kit.fontawesome.com/d5132e66e5.js" crossorigin="anonymous"></script>
</body>

</html>