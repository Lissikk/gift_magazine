<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>

  <!-- ПОВТОРИ ТАКОЙ ПУТЬ ВЕЗДЕ -->
  <?php
  include('../elements/header.php')
  ?>

  <!-- первый блок, который с картинкой -->
  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary" style="background-image: url(../resource/korobki.jpg); background-repeat: no-repeat; background-size: cover;">
      <div class="col-md-6 p-lg-5 mx-auto my-5">

        <h1 class="display-3 fw-bold">Подарки для каждого.</h1>
        <h3 class="fw-normal text-muted mb-3">Подари близким то, что им действительно нужно.</h3>
        <div class="d-flex gap-3 justify-content-center lead fw-normal">
          <a href="..\pages\tovar.php" class="btn btn-primary">Товары</a>
        </div>

      </div>
    </div>
  </main>
  <!-- конец первого блока, который с картинкой -->

  <!-- второй блок, в котором будут скидки -->
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Специальные предложения</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background: url(../resource/buyer.png); background-repeat: no-repeat; background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Получи скидку 25% на первую покупку!</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a href="..\pages\registr.php" class="btn btn-primary">Зарегистрируйся!</a>
              </div>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url(../resource/card.png); background-repeat: no-repeat; background-size: cover; ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Открой карту постоянного покупателя!</h3>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url(../resource/baloons.png); background-repeat: no-repeat; background-size: cover;">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Дополнительная скидка <br> 5% <br> на день рождения!</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- конец второго блока, в котором будут скидки -->

  <!-- блок о магазине?????? -->
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="..\resource\gift.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" >
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Мы самый приятный магазин подарков!</h1>
        <p class="lead">Мы заботимся не только о быстрой доставке заказанных вами подарков, но и об их упаковке! Просто напишите свои пожелания в комментарии к заказу!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="..\pages\tovar.php" class="btn btn-primary btn-lg px-4 me-md-2">Заказать подарок</a>
          <a href="..\pages\about.php" class="btn btn-outline-secondary btn-lg px-4">О нас</a>
        </div>
      </div>
    </div>
  </div>
  <!-- конец блока который о магазине?????? -->

  <!-- блок в котором откроются категории товаров -->
  <!-- ТУТ ТЫ НЕ МЕНЯЛА КНОПКИ -->
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="..\resource\doll.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <p class="card-text">Фигурки, плюшевые игрушки, куклы и др.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="..\pages\tovar.php" class="btn btn-sm btn-outline-secondary">Заказать</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="..\resource\postcards.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" ><rect width="100%" height="100%" fill="#868e96">
            </div>
            <div class="card-body">
              <p class="card-text">Картины, открытки, плакаты и др.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="..\pages\tovar.php" class="btn btn-sm btn-outline-secondary">Заказать</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="..\resource\mugs.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="card-body">
              <p class="card-text">Кружки, стаканы, бокалы и др.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="..\pages\tovar.php" class="btn btn-sm btn-outline-secondary">Заказать</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- конец блока про категории товаров -->

  <!-- блок с адресом!! -->
  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading fw-normal lh-1">Где нас найти?</h2>
      <p class="lead">Наш офис Вы можете найти по адресу ул. Пушкина дом Калатушкина 11, третий вход со стороны двора.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <div style="position:relative;overflow:hidden;">
        <iframe src="https://yandex.ru/map-widget/v1/?ll=37.467606%2C56.005365&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCggxMDA0ODQzNhJY0KDQvtGB0YHQuNGPLCDQnNC-0YHQutC-0LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0JvQvtCx0L3Rjywg0YPQu9C40YbQsCDQn9GD0YjQutC40L3QsCIKDfXdFUIVxwVgQg%2C%2C&z=17" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
      </div>
    </div>
  </div>

  <hr class="featurette-divider">
  <!-- конец блока с адресом -->

  <?php
  require_once('../elements/footer.php')
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>