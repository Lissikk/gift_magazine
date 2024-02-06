<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>

  <?php
  include('..\elements\header.php')
  ?>

  <!-- Ссылочки на ответы на вопросы -->
  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Ответы на вопросы</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#bootstrap" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Где находится ваш офис?</h3>
          <p>Наш офис Вы можете найти по адресу г. Лобня, Московская область ул. Пушкина дом Калатушкина 11, третий вход со стороны двора.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#cpu-fill" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Сколько времени занимает доставка?</h3>
          <p>В непраздничные периоды (неделя до и после праздника) доставка занимает от 1 суток до 3 дней по Абакану и до месяца по стране.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#calendar3" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Как связаться с вашей службой поддержки?</h3>
          <p>Связь со службой поддержки клиентов осуществляется через почту example@gmail.com.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#home" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Могу ли я отписаться от рассылки новостей и предложений?</h3>
          <p>Разумеется! Для этого Вам нужно выбрать письмо из почтовой рассылки в приложении почты и нажать на кнопку «Отказаться»..</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#speedometer2" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Как часто обновляется ассортимент вашего магазина?</h3>
          <p>Ассортимент нашего магазина обновляется каждые две недели.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#toggles2" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Какие преимущества предоставляет регистрация на вашем сайте?</h3>
          <p>Регистрация на нашем сайте предоставляет доступ к персональным скидкам и программе лояльности.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#geo-fill" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Как изменить адрес доставки после оформления заказа?</h3>
          <p>Чтобы изменить адрес доставки после оформления заказа Вам необходимо написать письмо с соответствующей просьбой на почту example@gmail.com.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#tools" />
        </svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Что делать, если я получил(а) поврежденный товар?</h3>
          <p>Если Вы получили поврежденный товар свяжитесь со службой поддержки через почту example@gmail.com.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Конец ссылочек на ответы на вопросы -->



  <?php
  include('..\elements\footer.php')
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>