<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
  <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
  <script src="https://bootstraptema.ru/_sf/3/394.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="cs.css" rel="stylesheet" />


  <link rel="shortcut icon" href="/myDipl/img/factory.ico" type="image/x-icon">
  <title>Главная</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<style>
  .scale {
    transition: 0.5s;
    /* Время эффекта */
  }

  .scale:hover {
    transform: scale(1.03);
    /* Увеличиваем масштаб */
  }


  html {
    scroll-behavior: smooth;
  }
</style>

<body>


  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="Glav.php" class="nav-link px-2 text-white">LoftPRO</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
              Товары
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              <li><a class="dropdown-item" href="Maf.php">Малые архитектурные формы</a></li>
              <li><a class="dropdown-item" href="Sad.php">Садово-парковая мебель</a></li>
              <li><a class="dropdown-item" href="Top.php">Топиарные и светодиодные фигуры</a></li>
            </ul>
          </li>
          <li><a class="nav-link px-2 text-secondary" href="Info.html">О нас</a></li>

          <li><a class="nav-link px-2 text-secondary" href="/diplomNew/myDipl/Cart/Cart.php">Корзина</a></li>
        </ul>

        <form class="d-flex" action="Search.php" method="post">
          <input class="form-control me-2" type="text" placeholder="Поиск" aria-label="Поиск" id="searchText" name="searchText">
          <input type="submit" class="btn btn-outline-success" value="Поиск"></a>

        </form>



        <div class="text-end" style="margin-left:10px;">

          <a class="btn btn-outline-primary" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Войти</a>
        </div>
      </div>
    </div>
  </header>




  <!--test-->
  <div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
      <div class="modal-content">

        <div class="modal-body">
          <div class="box">
            <div class="content">
              <div class="social">

              </div>

              <div class="error"></div>
              <div class="form loginBox">
                <div id="erconts"></div>
                <form class="form_modal_window" method="post" id="callbacks" accept-charset="UTF-8">


                  <input id="email" class="form-control" type="email" style="color:black;" placeholder="Адрес электронной почты" name="email" required>
                  <input id="password" class="form-control" type="password" placeholder="Пароль" name="password" required>

                  <input class="form_sub" id="form_sub" name="sub" type="submit" value="Войти">


                </form>
              </div>
            </div>
          </div>


          <div class="box">
            <div class="content registerBox" style="display:none;">
              <div class="form">
                <form method="post" class="form_modal_window2" html="{:multipart=>true}" data-remote="true" action="checkReg.php" id="contactForm" accept-charset="UTF-8">

                  <div id="erconts2"></div>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required><br>
                  <input type="text" class="form-control" name="number" id="number" placeholder="Например: +375(код оператора)9999999" pattern='\s{0,}\+{1,1}375\s{0,}\({0,1}(([2]{1}([5]{1}|[9]{1}))|([3]{1}[3]{1})|([4]{1}[4]{1}))\)\s{0,}[0-9]{3,3}\s{0,}[0-9]{4,4}' required>
                 <br>
                  <input type="email" class="form-control" name="email" id="email" style="color:black;" placeholder="Введите адрес электронной почты" required><br>
                  <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required><br>
                  <input class="form_sub2 " name="sub" type="submit" value="Зарегистрироваться">

                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <div class="forgot login-footer">
            <span>
              <a href="javascript: showRegisterForm();">Создать аккаунт</a>
              ?</span>
          </div>
          <div class="forgot register-footer" style="display:none">
            <span>У Вас существует аккаунт?</span>
            <a href="javascript: showLoginForm();">Войти</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){openLoginModal(); });
  </script>


  <script>
    $(document).ready(function() {
      $('.form_modal_window').submit(function() {


        $.ajax({
          type: "POST", //указываем что метод отправки POST
          url: "checkAuth.php", // указываем адрес обработчика
          data: $('.form_modal_window').serialize(), //указываем данные которые будут передаваться обработчику
          /* Мы указываем id формы - $('#callbacks'), и методом serialize() забираем значения всех полей. */
          error: function() {
            $("#erconts").html("Произошла ошибка!");
          },
          /* если произойдет ошибка в элементе с id erconts выведется сообщение*/
          beforeSend: function() {
            $("#erconts").html("<p style='color: orangered;'>Отправляем данные...</p>");
          },
          success: function(result) {
            /* В случае удачной обработки и отправки выполнится следующий код*/
            $('#erconts').html(result);
            checkThis();
          }
        });
        return false;
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      $('.form_modal_window2').submit(function() {
        $.ajax({
          type: "POST", //указываем что метод отправки POST
          url: "checkReg.php", // указываем адрес обработчика
          data: $('.form_modal_window2').serialize(), //указываем данные которые будут передаваться обработчику
          /* Мы указываем id формы - $('#callbacks'), и методом serialize() забираем значения всех полей. */
          error: function() {
            $("#erconts2").html("Произошла ошибка!");
          },
          /* если произойдет ошибка в элементе с id erconts выведется сообщение*/
          beforeSend: function() {
            $("#erconts2").html("<p style='color: orangered;'>Отправляем данные...</p>");
          },
          success: function(result) {
            /* В случае удачной обработки и отправки выполнится следующий код*/
            $('#erconts2').html(result);
            checkThis();
          }
        });
        return false;
      });
    });
  </script>








  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="img/loft.png" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/svet.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/svar.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>



  </div>
  </div>
  </div>


  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-Заголовок">МАЛЫЕ АРХИТЕКТУРНЫЕ ФОРМЫ</h2>
        <p class="lead">Малые архитектурные формы (МАФ) имеют не только декоративные, но и функциональные свойства.<BR>
          МАФ делают территорию уютной и красивой.
          МАФ от Loftpro - уникальные и красивые изделия изготовлены только из качественных материалов. </p>
      </div>
      <div class="col-md-5">
        <a href="Maf.php"><img class="scale" width="500" height="500" src="img/slon.jpg" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
          </img>
        </a>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-Заголовок">ТОПИАРНЫЕ И СВЕТОДИОДНЫЕ ФИГУРЫ</h2>
        <p class="lead">Наши фигуры - очень прочные и долговечные, благодаря уникальной технологии производства.<BR>
          Фигуры выглядят роскошно, являются незаменимым ярким украшением различных объектов, площадок, парков и клумб.
          Наши изделия красиво выглядят, привлекают внимание прохожих и служат красивым фоном для фотографий. Их можно использовать в любых погодных условиях, круглый год.
          Фигура украсит территорию и поднимет настроение взрослым и детям.
          Производим ландшафтные скульптуры любых форм и размеров. </p>
      </div>
      <div class="col-md-5 order-md-1">
        <a href="Top.php"><img class="scale" width="500" height="500" src="img/sob.jpg" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">
          </text></img>
        </a>

      </div>
    </div>



    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 ">
        <h2 class="featurette-Заголовок">САДОВО-ПАРКОВАЯ МЕБЕЛЬ</h2>
        <p class="lead">Садовая и парковая мебель из металла и дерева является наиболее универсальной по красоте,<br>
          качеству и стоимости и встречается повсеместно.<br>
          Наши садово-парковые изделия отличает высокое качество,
          презентабельный внешний вид и цена от производителя, что делает их достаточно конкурентноспособными на огромном рынке садово-парковой мебели.</p>
      </div>
      <div class="col-md-5">
        <a href="Sad.php"><img class="scale" width="500" height="500" src="img/sad.jpg" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">
          </text></img>
        </a>

      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/form.js"></script>


</body>

</html>