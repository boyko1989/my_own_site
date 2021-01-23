<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?=PATH?>public/views/style/style.css">   
   <link rel="icon" sizes="450x450" type="image/svg+xml" href="<?=PATH?>public/views/img/logo.svg">
   <title>Личный сайт Павла Бойко</title>
</head>
<body>
   <header>
      <div class="logo">
         <a href="/">
            <img src="<?=PATH?>public/views/img/logo.svg" alt="logo">
         </a>
      </div>
      <nav>
         <ul>
            <a href="#"><li>Главная</li></a>
            <a href="#"><li>Заказать услугу</li></a>
            <a href="#"><li>Подробнее о проекте</li></a>
         </ul>
      </nav>
   </header>
   <main>
      <h1>Приветствую на своём сайте!</h1>
      <p>Я весь такой хороший, занимаюсь много чем интересным и вот что Вы можете у меня заказать:</p>
      <div id="services">
            <div class="block">
               <h2>Услуга <br><span class="sage">"Приезжай — напилим!"</span></h2>
               <br><hr>
               <p>Вы привозите свои необработанные древесные материалы, а я напиливаю и строгаю их в размер.</p>
               <div class="details"><hr><br><a href="#" >Подробнее</a><br><br><hr></div>               
               <div class="button"><a href="##">Заказать</a></div>
            </div>
         
            <div class="block">
               <h2>Давай я <span class="sage">"нарисую"</span> твой чертёж?</h2>
               <br><hr>
               <p>Создаю чертежи мебели со спецификациями и рассчётом стоимости.</p>
               <div class="details"><hr><br><a href="#" >Подробнее</a><br><br><hr></div>               
               <div class="button"><a href="##">Заказать</a></div>
            </div>

            <div class="block">
               <h2>Нравится сайт? <span class="sage">Хочешь такой же?</span></h2>
               <br><hr>
               <p>Этот сайт я сделал для себя сам — от дизайна до бекенда. Могу что-то подобное сделать и Вам.</p>
               <div class="details"><hr><br><a href="#" >Подробнее</a><br><br><hr></div>               
               <div class="button"><a href="##">Заказать</a></div>
            </div>
      </div>

      <div class=""
   </main>
</body>
</html>