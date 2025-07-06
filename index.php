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
</body>

</html>