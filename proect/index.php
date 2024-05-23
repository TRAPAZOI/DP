<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Ваш сайт</title>
    
</head>
<body>
    <header>
        <nav>
        <a href="produkt.php">Продукт</a>
            <a href="onas.php">О нас</a>
            <a href="contact.php">Контакты</a>
        </nav>
    </header>
<main>

<section>
    <!-- Вставляем ваше изображение -->
    <img class="hero-image" src="ima2222222ge.png" alt="Описание изображения">
    
    <!-- Надпись под изображением -->
    <div class="image-caption">ООО "Волна"-это</div>

    <!-- Контейнер для изображений и описаний -->
    <div class="image-container">
        <!-- Первый ряд -->
        <div class="image-block">
            <img src="icons8-done-50.png" alt="Описание изображения 1">
            <h2 class="image-title">Более 700</h2>
            <div class="image-description">Безопасных сделок заключено нашими специалистами</div>
        </div>

        <!-- Второй ряд -->
        <div class="image-block">
            <img src="icons8-очередь-50.png" alt="Описание изображения 2">
            <h2 class="image-title">Около 40 </h2>
            <div class="image-description">Квалифицированных специалистов которые работают у нас</div>
        </div>

        <!-- Третий ряд -->
        <div class="image-block">
            <img src="icons8-время-50.png" alt="Описание изображения 3">
            <h2 class="image-title">Более 20 лет</h2>
            <div class="image-description">Наша компания занимается юридическими вопросами клиентов</div>
        </div>
    </div>
</section>

<section>
    <!-- Здесь будет содержимое вашего сайта -->
    <div class="image-caption">Мы выращиваем </div>



    <div class="slider">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide">
                <img src="ячмень.jpg" alt="Image 1">
                <div class="text"> Ячмень род растений семейства Злаки , один из древнейших злаков, возделываемых человеком.
                Зерно ячменя широко используют для продовольственных, технических и кормовых целей, в том числе в пивоваренной промышленности, при производстве перловой и ячневой круп
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="под.jpeg" alt="Image 2">
                <div class="text">Подсолнечник его обычно выращивают как сельскохозяйственную культуру из-за съедобных маслянистых семян. Помимо производства растительного масла, его также используют в качестве корма для скота (в виде муки или силосного растения), в качестве корма для птиц, в некоторых промышленных целях</p>
       </div>
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img src="пшеница.jpg" alt="Image 3">
                <div class="text">Пшеница ведущая злаковая культура во многих странах мира. Получаемая из зёрен пшеницы мука используется при выпекании хлеба, макарон и кондитерских изделий.</p>
       </div>
            </div>
        </div>
        <!-- Navigation -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

</section>

<section>
    <div class="image-caption">Наши услуги</div>
    <div class="image-container">
        <!-- Первый ряд -->
        <div class="image-block">
            <img src="icons8-лупа-64.png" alt="Описание изображения 1">
            <h2 class="image-title">Подбор сортов</h2>
            <div class="image-description">Мы помогаем вам выбрать оптимальные сорта подсолнухов, пшеницы и ячменя, учитывая местные климатические особенности, почвенные условия и ваши потребности. 

            </div>
        </div>

        <!-- Второй ряд -->
        <div class="image-block">
            <img src="icons8-доставка-50.png" alt="Описание изображения 2">
            <h2 class="image-title">Поставка семян и удобрений

            </h2>
            <div class="image-description">Мы сотрудничаем с надежными поставщиками, предлагая высококачественные семена и удобрения. Наши партнерства позволяют нам предоставлять вам доступ к лучшим сельскохозяйственным ресурсам

            </div>
        </div>

        <!-- Третий ряд -->
        <div class="image-block">
            <img src="icons8-лейка-50.png" alt="Описание изображения 3">
            <h2 class="image-title">Технологии выращивания

            </h2>
            <div class="image-description">ООО "Волна" активно внедряют передовые технологии в процесс выращивания. Мы  примененяем современные методы орошения, механизации и управления посевами.

            </div>
        </div>
    </div>
</section>
    <style>
     
          .container {
            margin-top: 190px;
            margin-bottom: 60px;
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            box-sizing: border-box;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, textarea {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid;
            border-radius: 4px;
        }
        .success {
            border-color: #4CAF50;
            color: #4CAF50;
        }
        .error {
            border-color: #F44336;
            color: #F44336;
        }
    </style>
<section>
    <div class="container">
        <h2>Напишите нам</h2>
        
        <!-- Отображение сообщений -->
        <?php if (isset($_GET['success'])): ?>
            <div class="message success">Сообщений отправлено</div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="message error"><?= htmlspecialchars($_GET['error']) ?></div>
        <?php endif; ?>

        <form action="send.php" method="post">
            <label for="name">ФИО</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Почта</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Сообщение</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Отправить</button>
        </form>
    </div>
</section>
    <button id="scrollToTopBtn" title="Go to top">Наверх</button>
    
        
    <footer>
        <div class="footer-content">
            <p>OOO "Волна". Все права защищены.</p>
            <nav>
                <a >Номер тел: 8 (928) 757-29-55</a>
                <a >Email: pobegailova78@mail.ru</a>
            </nav>
        </div>
    </footer>
        </main>
    
  
</body>
</html>
