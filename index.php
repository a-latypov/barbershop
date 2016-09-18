<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
      <title>Барбершоп "Бородинский"</title>
  </head>
  <body>
    <header class="main-header">
      <div class="container">
<!--  nav это основгая навигация по сайту-->
        <nav class="main-navigation">
          <ul>
            <li>
              <a href="#">Информация</a>
            </li>
            <li>
              <a href="#">Новости</a>
            </li>
            <li>
              <a href="#">Прайс-лист</a>
            </li>
            <li>
              <a href="#">Контакты</a>
            </li>          
          </ul>
        
        </nav>
<!--        кнопка входа-->
        <div class="user-block">
          <a class="login" href="#">Вход</a>        
        </div>
       
      </div>  
    </header>
<!--    основное тело (информация)-->
    <main class="container">
      <div class="index-logo">
        <img src="img/index-logo.png" width="368" height="204" alt="Барбершоп Бородинский">
      </div>
      <section class="features">
        <div class="features-item">
          <b class="features-name">Быстро</b>
          <p>Мы делаем свою работу быстро! Два часа пролетят
            незаметно и вы - счастливый обладатель стильной 
            стрижки-минутки!</p>
        </div>
        <div class="features-item">
          <b class="features-name">Круто</b>
          <p>Забудьте как вы стриглись раньше. Мы сделаем из вас
          звезду футбола и кино! Во всяком случае внешне.</p>
        </div>
        <div class="features-item">
        <b class="features-name">Дорого</b>
          <p>Мы делаем свою работу быстро! Два часа пролетят
            незаметно и вы - счастливый обладатель стильной 
            стрижки-минутки!</p>
        </div>        
      </section>
      <div class="index-content">
        <div class="index-content-left">
          <h2 class="index-content-title">Новости</h2>
          <ul class="news-preview">
            <li>
              <p>Нам наконец завезли Ягермастер!Теперь вы можете
               пропустить стаканчик во время стрижки</p>
              <time datetime="2016-01-11">11 января</time>
            </li>
            <li>
              <p>В нашей команде пополнение, Борис "Бритва"
               Стригунец, обладатель множества титулов и наград
               пополнил наши стройные ряды</p>
              <time datetime="2016-01-18">18 января</time>
            </li>
          </ul>
          <a class="btn" href="#">Все новости</a>        
        </div>
        <div class="index-content-right">
          <h2 class="index-content-title">Фотогалерея</h2>
          <div class="gallery">
            <figure class="gallery-content">
              <img src="img/photo-1.jpg" width="268" height="164" alt="">
            </figure>
            <button class="btn gallery-prev">Назад</button>
            <button class="btn gallery-next">Вперёд</button> 
          </div>        
        </div>
      </div>
           <div class="index-content">
        <div class="index-content-left">
          <h2 class="index-content-title">Контактная информация</h2>
          <p>
            Барбершоп "Бородинский"<br>
            Адрес: г. Санкт-Петербург, Б. Конюшенная, д. 19/8<br>
            Телефон: +7 (812) 666-02-66
          </p>
          <p>
            Время работы:<br>
            пн - пт: с 10:00 до 22:00<br>
            сб - вс: с 10:00 до 19:00
          </p>
          <a class="btn" href="#">Как проехать</a>
          <a class="btn" href="#">Обратная связь</a>
        </div>
        <div class="index-content-right">
          <h2 class="index-content-title">Записаться</h2>
          <p>Укажите желаемую дату и время и мы свяжемся с вами
            для подтверждения брони</p>
          <form class="appointment-form" action="https://echo.
                  htmlacademy.ru" method="post">
            <input type="text" name="date" value="" placeholder
                   ="Дата">
            <input type="text" name="time" value="" placeholder
                   ="Время">
            <input type="text" name="name" value="" placeholder
                   ="Ваше имя">
            <input type="tel" name="phone" value="" placeholder
                   ="Телефон">
            <button class="btn" type="submit">Отправить</button>
          </form>
                
        </div>
      </div>
    </main> 
    <footer class="main-footer">
      <div class="container">
        <section class="footer-contacts">
          Барбершоп "Бородинский"<br>
          Адрес: г. Санкт-Петербург, Б. Конюшенная, д. 19/8<br>
          <a href="#">Как нас найти?</a><br>
          Телефон: +7 (812) 666-02-66      
        </section>
        <section class="footer-social">
        <p>Давайте дружить!</p>
        <a class="social-btn social-btn-vk" href="#">Вконтакте</a>
        <a class="social-btn social-btn-fb" href="#">Фейсбук</a>
        <a class="social-btn social-btn-inst" href="#">Инстаграм</a>          
        </section>
        <section class="footer-copyright">
          <p>Разработано:</p>
          <a class="btn" href="https://htmlacademy.ru">HTMLAcademy</a>    
        </section>
      </div>
    </footer>
  </body>
</html>