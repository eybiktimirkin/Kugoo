<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title><?= $page_title ?> - Kugoo</title>
</head>

<body>
  <nav class="navbar">
    <div class="navbar-wrapper">
      <ul class="header-nav">
        <li class="header-nav-item">Сервис</li>
        <li class="header-nav-item">Сотрудничество</li>
        <li class="header-nav-item">Заказать звонок</li>
      </ul>
      <div class="header-links">
        <svg class="links-icon" width="12" height="12">
          <use href="img/sprite.svg#viber"></use>
        </svg>
        <svg class="links-icon" width="12" height="12">
          <use href="img/sprite.svg#whatsap"></use>
        </svg>
        <svg class="links-icon" width="12" height="12">
          <use href="img/sprite.svg#tg"></use>
        </svg>
      </div>
    </div>
    <div class="header-phone">
      <a href="tel:+78005055461" class="header-phone-link">
        +7 (800) 505-54-61
      </a>
    </div>
  </nav>
  <section class="section section-search">
    <div class="container">
      <div class="search-wrapper">
        <h1 class="section-title">
          KUGOO
        </h1>
        <button class="button button-catalog">
          <div class="lines">
            <div class="line-middle"></div>
          </div>
          <p class="text-catalog">Каталог</p>
        </button>
        <form action="#" method="POST" class="search-form">
          <div class="input-wrapper">
            <input id="search" type="text" class="input" name="search" placeholder="Искать самокат KUGO" />
            <button class="button button-search">
              <svg class="links-icon" width="16" height="16">
                <use href="img/sprite.svg#search"></use>
              </svg>
            </button>
          </div>
        </form>
        <div class="user-actions">
          <a href="#" class="actions">
            <img src="img/balance.jpg" width="20" height="20" alt="весы" class="img-actions">
          </a>
          <a href="#" class="actions">
            <img src="img/heart.jpg" width="20" height="20" alt="cердце" class="img-actions">
          </a>
          <a href="#" class="actions">
            <img src="img/shopping.jpg" width="20" height="20" alt="корзина" class="img-actions">
            Корзина
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-header">
    <div class="container">
      <div class="header-content">
        <div class="header-wrapper">
          <div class="info-wrapper">
            <svg class="info-icon" width="15" height="15">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address class="info-adress">
              Восточно-Кругликовская улица, 86
            </address>
            <div class="work-time">
              Вт - Сб 10:00 - 20:00
            </div>
          </div>
          <h1 class="section-title header-title">
            Запишитесь на бесплатный тест-драйв электросамокатов
          </h1>
          <p class="header-text">
            в Москве без ограничения по времени
          </p>
          <ul class="header-features">
            <li class="header-features-item">
              <svg class="links-icon" width="16" height="16">
                <use href="img/sprite.svg#samokat"></use>
              </svg>
              <p class="header-features-text">
                Поймете, какая модель вам подходит
              </p>
            </li>
            <li class="header-features-item">
              <svg class="links-icon" width="16" height="16">
                <use href="img/sprite.svg#energy"></use>
              </svg>
              <p class="header-features-text">
                Проверите лучшие самокаты в деле
              </p>
            </li>
          </ul>
          <button class="button header-button">
            Записаться
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="section testdrive">
    <div class="container">
      <div class="testdrive-wrapper">
        <div class="testdrive-content">
          <h1 class="section-title testdrive-title">
            Определите максимально подходящую вам модель не теоретически, а на практике
          </h1>
          <p class="testdrive-text">
            <b>Тест-драйв поможет:</b>
          </p>
          <ul class="testdrive-features">
            <li class="testdrive-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="testdrive-features-item-text">
                <b>Понять</b> подходит ли вам конкретная модель;
              </p>
            </li>
            <li class="testdrive-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="testdrive-features-item-text">
                <b>Испытать</b> самокат в «реальной жизни»;
              </p>
            </li>
            <li class="testdrive-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="testdrive-features-item-text">
                <b>Оценить</b> удобство хранения и эксплуатации;
              </p>
            </li>
            <li class="testdrive-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="testdrive-features-item-text">
                <b>Узнать</b> реальные характеристики и возможности модели.
              </p>
            </li>
          </ul>
        </div>
        <img src="img/samokat.jpg" alt="самокаты" class="testdrive-img">
      </div>
    </div>
  </section>
  <section class="section training">
    <div class="container">
      <div class="training-wrapper">
        <img src="img/woman.jpg" alt="девушка на самокате" class="training-img">
        <div class="training-content">
          <h1 class="section-title training-title">
            Научим правильной и безопасной езде в городе вас или вашего ребенка
          </h1>
          <p class="training-text">
            <b>На обучении специалист расскажет:</b>
          </p>
          <ul class="training-features">
            <li class="training-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="training-features-item-text">
                Как подготовить самокат к поездке;
              </p>
            </li>
            <li class="training-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="training-features-item-text">
                Как «завести» самокат;
              </p>
            </li>
            <li class="training-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="training-features-item-text">
                Как вести себя во время поездки и обезопасить себя и окружающих;
              </p>
            </li>
            <li class="training-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="training-features-item-text">
                Как складывать и раскладывать электросамокат;
              </p>
            </li>
            <li class="training-features-item">
              <svg class="links-icon" width="22" height="22">
                <use href="img/sprite.svg#check"></use>
              </svg>
              <p class="training-features-item-text">
                Как ухаживать за своим девайсом.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
</body>

</html>