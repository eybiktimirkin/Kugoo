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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>Главная</title>
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
            <input id="search" type="text" class="input-seacrh" name="search" placeholder="Искать самокат KUGO" />
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
        <img src="img/header-image.png" alt="главная картинка" class="header-bg">
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
              <div class="icon-wrapper">
                <img src="img/scooter.png" alt="самокат" class="links-icon-img">
              </div>
              <p class="header-features-text">
                Поймете, какая модель вам подходит
              </p>
            </li>
            <li class="header-features-item">
              <div class="icon-wrapper">
                <svg class="links-icon" width="16" height="16">
                  <use href="img/sprite.svg#energy"></use>
                </svg>
              </div>
              <p class="header-features-text">
                Проверите лучшие самокаты в деле
              </p>
            </li>
          </ul>
          <button class="button header-button" data-toggle="modal">
            Записаться
          </button>
        </div>
      </div>
    </div>
  </section>
  <div class="modal" id="feedback-modal">
    <div class="modal-dialog">
      <div class="modal-dialog-wrapper">
        <h2 class="modal-title">Запишитесь на тест-драйв электросамоката</h2>
        <p class="modal-text">
          и подберите модель для себя
        </p>
        <p class="modal-small-text">
          Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.
        </p>
        <p class="input-text">Как с вами удобнее связаться?</p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group-number">
              <div class="input-group">
                <input id="user-phone" type="text" class="input phone-mask" name="userphone"
                  placeholder="+7 (___) __ - __ - __" maxlength="30" required />
                <label class="input-group-label" for="user-phone"></label>
              </div>
              <button type="submit" class="button cta-form-button modal-button">
                Оформить предзаказ
              </button>
            </div>
          </div>
          <div class="cta-form-footer">
            <div class="notify modal-notify">
              <svg class="modal-notify-icon" width="16" height="16">
                <use href="img/sprite.svg#checkbox"></use>
              </svg>
              <p class="notify-text modal-notify-text">
                Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и политикой конфиденциальности
              </p>
            </div>
          </div>
        </form>
      </div>
      <img src="img/modal.jpg" alt="девушка на самокате" class="modal-img">
      <a href="#" class="modal-close" data-toggle="modal">
        <img src="img/close.png" alt="закрыть">
      </a>
    </div>
  </div>
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
  <section class="section good-cards">
    <div class="container">
      <div class="title-wrapper">
        <h1 class="section-title good-cards-title">
          Сейчас для тест-драйва и обучения доступны следующие модели
        </h1>
      </div>
      <div class="cards-wrapper">
        <div class="card-wrapper">
          <div class="card-top">
            <div class="card-info">
              <button class="button-hit">ХИТ</button>
              <img src="img/balance.png" alt="весы" class="links-icon">
            </div>
            <img src="img/kirin.jpg" width="242" height="182" alt="самокат" class="img-card">
          </div>
          <div class="card-bottom">
            <h2 class="card-title">
              Kugoo Kirin M4
            </h2>
            <ul class="cards-features">
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#accumulator"></use>
                </svg>
                <p class="card-features-text">
                  2000 mAh
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#speedometer"></use>
                </svg>
                <p class="card-features-text">
                  60 км/ч
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#power"></use>
                </svg>
                <p class="card-features-text">
                  1,2 л.с.
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#timer"></use>
                </svg>
                <p class="card-features-text">
                  5 часов
                </p>
              </li>
            </ul>
            <div class="clients-info">
              <div class="price-wrapper">
                <p class="old-price">39 900 ₽</p>
                <p class="new-price">29 900 ₽</p>
              </div>
              <div class="action-icons">
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#shopping"></use>
                </svg>
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
            <button class="button button-record">Записаться на тест-драйв</button>
          </div>
        </div>
        <div class="card-wrapper">
          <div class="card-top">
            <div class="card-info">
              <button class="button-new">Новинка</button>
              <img src="img/balance.png" alt="весы" class="links-icon">
            </div>
            <img src="img/kirin.png" width="242" height="182" alt="самокат" class="img-card">
          </div>
          <div class="card-bottom">
            <h2 class="card-title">
              Kugoo Kirin M4
            </h2>
            <ul class="cards-features">
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#accumulator"></use>
                </svg>
                <p class="card-features-text">
                  2000 mAh
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#speedometer"></use>
                </svg>
                <p class="card-features-text">
                  60 км/ч
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#power"></use>
                </svg>
                <p class="card-features-text">
                  1,2 л.с.
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#timer"></use>
                </svg>
                <p class="card-features-text">
                  5 часов
                </p>
              </li>
            </ul>
            <div class="clients-info">
              <div class="price-wrapper">
                <p class="old-price">39 900 ₽</p>
                <p class="new-price">29 900 ₽</p>
              </div>
              <div class="action-icons">
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#shopping"></use>
                </svg>
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
            <button class="button button-record">Записаться на тест-драйв</button>
          </div>
        </div>
        <div class="card-wrapper">
          <div class="card-top">
            <div class="card-info">
              <button class="button-hit">ХИТ</button>
              <img src="img/balance.png" alt="весы" class="links-icon">
            </div>
            <img src="img/kirin.png" width="242" height="182" alt="самокат" class="img-card">
          </div>
          <div class="card-bottom">
            <h2 class="card-title">
              Kugoo Kirin M4
            </h2>
            <ul class="cards-features">
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#accumulator"></use>
                </svg>
                <p class="card-features-text">
                  2000 mAh
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#speedometer"></use>
                </svg>
                <p class="card-features-text">
                  60 км/ч
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#power"></use>
                </svg>
                <p class="card-features-text">
                  1,2 л.с.
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#timer"></use>
                </svg>
                <p class="card-features-text">
                  5 часов
                </p>
              </li>
            </ul>
            <div class="clients-info">
              <div class="price-wrapper">
                <p class="old-price">39 900 ₽</p>
                <p class="new-price">29 900 ₽</p>
              </div>
              <div class="action-icons">
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#shopping"></use>
                </svg>
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
            <button class="button button-record">Записаться на тест-драйв</button>
          </div>
        </div>
        <div class="card-wrapper">
          <div class="card-top">
            <div class="card-info">
              <button class="button-new">Новинка</button>
              <img src="img/balance.png" alt="весы" class="links-icon">
            </div>
            <img src="img/kirin.png" width="242" height="182" alt="самокат" class="img-card">
          </div>
          <div class="card-bottom">
            <h2 class="card-title">
              Kugoo Kirin M4
            </h2>
            <ul class="cards-features">
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#accumulator"></use>
                </svg>
                <p class="card-features-text">
                  2000 mAh
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#speedometer"></use>
                </svg>
                <p class="card-features-text">
                  60 км/ч
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#power"></use>
                </svg>
                <p class="card-features-text">
                  1,2 л.с.
                </p>
              </li>
              <li class="cards-features-item">
                <svg class="links-icon" width="18" height="18">
                  <use href="img/sprite.svg#timer"></use>
                </svg>
                <p class="card-features-text">
                  5 часов
                </p>
              </li>
            </ul>
            <div class="clients-info">
              <div class="price-wrapper">
                <p class="old-price">39 900 ₽</p>
                <p class="new-price">29 900 ₽</p>
              </div>
              <div class="action-icons">
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#shopping"></use>
                </svg>
                <svg class="action-icon" width="40" height="40">
                  <use href="img/sprite.svg#heart"></use>
                </svg>
              </div>
            </div>
            <button class="button button-record">Записаться на тест-драйв</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section-cta">
    <div class="container bg-grey">
      <img class="cta-image" src="img/cta.png" alt="cta">
      <div class="cta-form-wrapper">
        <form action="handler.php" method="POST" class="cta-form">
          <h2 class="section-title cta-form-title">
            Нет нужной модели, которую хотите протестировать?
          </h2>
          <p class="cta-form-text">
            <b>Оставьте заявку, и менеджер подберет нужный самокат</b>
          </p>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-phone" type="text" class="input phone-mask" name="userphone"
                placeholder="+7 (___) __ - __ - __" maxlength="30" required />
              <label class="input-group-label" for="user-phone"></label>
            </div>
            <button type="submit" class="button cta-form-button">
              Оставить заявку на тест-драйв
            </button>
          </div>
          <div class="cta-form-footer">
            <div class="notify">
              <svg class="notify-icon" width="16" height="16">
                <use href="img/sprite.svg#checkbox"></use>
              </svg>
              <p class="notify-text">
                Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <u>политикой
                  конфиденциальности</u>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="section section-footer-top">
    <div class="footer-top-wrapper">
      <div class="section-title footer-top-title">
        Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты
      </div>
      <div class="input-group modal-input-group">
        <input id="modal-user-name" type="text" class="input modal-input" name="username"
          placeholder="Введите Ваш email" />
        <button type="submit" class="button footer-top-form-button">
          Подписаться
        </button>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="footer-menu">
      <div class="footer-menu-wrapper footer-menu-wrapper-1">
        <h2 class="footer-menu-title">
          Каталог товаров
        </h2>
        <ul class="footer-menu-list">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Электросамокаты</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Электроскутеры</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Электровелосипеды</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Электровелосипеды</a>
          </li>
        </ul>
      </div>
      <div class="footer-menu-wrapper footer-menu-wrapper-2">
        <h2 class="footer-menu-title">
          Покупателям
        </h2>
        <ul class="footer-menu-list column-2">
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Сервисный центр</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Доставка и оплата</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Рассрочка</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Тест-драйв</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Блог</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Сотрудничество</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Контакты</a>
          </li>
          <li class="footer-menu-item">
            <a href="#" class="footer-menu-link">Акции</a>
          </li>
        </ul>
      </div>
      <div class="footer-menu-wrapper footer-menu-wrapper-3">
        <h2 class="footer-menu-title">
          Контакты
        </h2>
        <ul class="footer-menu-list column-2">
          <li class="footer-menu-item footer-menu-link">
            Call-центр
          </li>
          <li class="footer-menu-item">
            <a href="tel:+78005055461" class="footer-menu-link text-number">+7 (800) 505-54-61</a>
          </li>
          <li class="footer-menu-item footer-menu-link text-time">
            Пн-Вс 10:00 - 20:00
          </li>
          <li class="footer-menu-item footer-menu-link">
            Сервисный центр
          </li>
          <li class="footer-menu-item">
            <a href="tel:+784993507692" class="footer-menu-link text-number">+7 (499) 350-76-92</a>
          </li>
          <li class="footer-menu-item footer-menu-link text-time">
            Пн-Вс 10:00 - 20:00
          </li>
        </ul>
      </div>
      <div class="footer-menu-wrapper footer-menu-wrapper-4">
        <a href="#" class="callback">
          Заказать звонок
        </a>
      </div>
    </div>
    <hr color="rgba(93, 108, 123, 1)" class="footer-seporator" />
    <div class="footer-links">
      <h1 class="section-title">
        KUGOO
      </h1>
      <div class="links-download-wrapper">
        <a href="#" class="link-download">
          <svg class="links-icon" width="151" height="45">
            <use href="img/sprite.svg#GP"></use>
          </svg>
        </a>
        <a href="#" class="link-download">
          <svg class="links-icon" width="135" height="45">
            <use href="img/sprite.svg#AS"></use>
          </svg>
        </a>
      </div>
      <div class="links-wrapper">
        <a href="#" class="link-item">
          <svg class="links-icon" width="123" height="45">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="link-item">
          <svg class="links-icon" width="123" height="45">
            <use href="img/sprite.svg#youtube"></use>
          </svg>
        </a>
        <a href="#" class="link-item">
          <svg class="links-icon" width="123" height="45">
            <use href="img/sprite.svg#telegram"></use>
          </svg>
        </a>
      </div>

    </div>
    <hr color="rgba(93, 108, 123, 1)" class="footer-seporator footer-seporator-2" />
    <div class="footer-bottom">
      <div class="footer-legal">
        <a href="#" class="footer-legal-item">
          Реквизиты
        </a>
        <a href="#" class="footer-legal-item">
          Политика конфиденциальности
        </a>
      </div>
      <div class="footer-bottom-links">
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm1"></use>
          </svg>
        </a>
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm2"></use>
          </svg>
        </a>
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm3"></use>
          </svg>
        </a>
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm4"></use>
          </svg>
        </a>
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm5"></use>
          </svg>
        </a>
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm6"></use>
          </svg>
        </a>
        <a href="#" class="footer-bottom-link">
          <svg class="links-icon" width="35" height="24">
            <use href="img/sprite.svg#pm7"></use>
          </svg>
        </a>
      </div>
      <div class="header-links">
        <p class="footer-bottom-text">
          Online чат:
        </p>
        <svg class="links-icon" width="16" height="16">
          <use href="img/sprite.svg#viber"></use>
        </svg>
        <svg class="links-icon" width="16" height="16">
          <use href="img/sprite.svg#whatsap"></use>
        </svg>
        <svg class="links-icon" width="16" height="16">
          <use href="img/sprite.svg#tg"></use>
        </svg>
      </div>
    </div>

  </footer>
  <script src="main.js"></script>
</body>

</html>