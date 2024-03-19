<?php
session_start();
$connect = mysqli_connect("localhost", "root", "123456", "workshop");
$query = "SELECT * FROM `product` where id_prod = 1 and kat='Maf'";
$query1 = "SELECT * FROM `product` where id_prod = 2 and kat='Maf'";
$query2 = "SELECT * FROM `product` where id_prod = 3 and kat='Maf'";
$query3 = "SELECT * FROM `product` where id_prod = 4 and kat='Maf'";
$query4 = "SELECT * FROM `product` where id_prod = 5 and kat='Maf'";
$query5 = "SELECT * FROM `product` where id_prod = 6 and kat='Maf'";
$query6 = "SELECT count(*) FROM `shopcart`";
$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query1);
$result3 = mysqli_query($connect, $query2);
$result4 = mysqli_query($connect, $query3);
$result5 = mysqli_query($connect, $query4);
$result6 = mysqli_query($connect, $query5);
$result_cart = mysqli_query($connect, $query6);
$row_cart  = mysqli_fetch_array($result_cart);



// if($_POST != NULL)
// {


//     $_SESSION['id_us'] = mysqli_query($link, "Select id_us from users where mail = '".$email."'");
//      $id_us = $_SESSION['id_us'];



//         $query = mysqli_query($link, "Select * from ShopCart where id_prod = '".$id_prod."'");
//         $data = mysqli_fetch_assoc($query);


//         if(!is_null($data)){
//            print( "Такой товар лежит в корзине");
//             return;  
//         }
//         else{
//             $query = mysqli_query($link, "Insert into users values (default,'".$name."', '".$number."', '".$email."', '".$pass."')");
//            $_SESSION['id_us'] = mysqli_query($link, "Select id_us from users where mail = '".$email."'");
//            //while($row1 = mysqli_fetch_array($_SESSION['id_us'])){echo $row1[0];}

//             //header("Location:Info.html");
//         }

//     mysqli_close($link);
// }





?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
  <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>
  <script src="https://bootstraptema.ru/_sf/3/394.js" type="text/javascript"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="cs.css" rel="stylesheet" />
  <link href="csInfo.css" rel="stylesheet" />
  <link href="checkAuth.php" rel="stylesheet" />
  <link rel="shortcut icon" href="/myDipl/img/factory.ico" type="image/x-icon">
  <title>Малые архитектурные формы</title>
</head>
<style>
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
          <li>
            <!--?php
            if (isset($_SESSION['id_us'])) {
              echo "<span class='badge basker_kol'>";
              echo $row_cart[0];
              echo "</span>";
            } else {
              echo " <span class='badge basker_kol'>0</span>";
            }
            ?-->
          </li>
        </ul>


        <form class="d-flex" action="Search.php" method="post">
          <input class="form-control me-2" type="text" placeholder="Поиск" aria-label="Поиск" id="searchText" name="searchText">
          <input type="submit" class="btn btn-outline-success" value="Поиск"></a>

        </form>



        <div class="text-end" style="margin-left:10px;">

          <a class="btn btn-outline-primary" href="Glav.php">Войти</a>
        </div>
      </div>
    </div>
  </header>



  <!--Album-->
  <main>



    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">Малые архитектурные формы</h1>
          <p class="lead text-muted"> Это конструкции, служащие для декоративного оформления и выполнения функциональной нагрузки в ландшафтном дизайне.</p>

        </div>
      </div>
    </section>

    <?php $row = mysqli_fetch_array($result1); ?>

    <div class="container">


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card border-primary">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?php echo $row['photo']; ?>" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>
              Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            <div class="card-body">

              <p class="card-text"><?php echo $row['prod_name']; ?></p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary btn-buy" id="<?= $row['id_prod']; ?>">Заказать</button>
                </div>
                <small class="text-muted"><?php echo $row['price']; ?> руб./шт</small>
              </div>
            </div>
          </div>
        </div>


        <?php $row = mysqli_fetch_array($result2); ?>
        <div class="col">
          <div class="card border-primary">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?php echo $row['photo']; ?>" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            <div class="card-body">

              <p class="card-text"><?php echo $row['prod_name']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary btn-buy" id="<?= $row['id_prod']; ?>">Заказать</button>
                </div>
                <small class="text-muted"><?php echo $row['price']; ?> руб./шт</small>
              </div>
            </div>
          </div>
        </div>


        <?php $row = mysqli_fetch_array($result3); ?>
        <div class="col">
          <div class="card border-primary">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?php echo $row['photo']; ?>" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            <div class="card-body">

              <p class="card-text"><?php echo $row['prod_name']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary btn-buy" id="<?= $row['id_prod']; ?>">Заказать</button>
                </div>
                <small class="text-muted"><?php echo $row['price']; ?> руб./шт</small>
              </div>
            </div>
          </div>
        </div>

        <?php $row = mysqli_fetch_array($result4); ?>
        <div class="col">
          <div class="card border-primary">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?php echo $row['photo']; ?>" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            <div class="card-body">

              <p class="card-text"><?php echo $row['prod_name']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary btn-buy" id="<?= $row['id_prod']; ?>">Заказать</button>
                </div>
                <small class="text-muted"><?php echo $row['price']; ?> руб./шт</small>
              </div>
            </div>
          </div>
        </div>

        <?php $row = mysqli_fetch_array($result5); ?>
        <div class="col">
          <div class="card border-primary">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?php echo $row['photo']; ?>" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            <div class="card-body">

              <p class="card-text"><?php echo $row['prod_name']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary btn-buy" id="<?= $row['id_prod']; ?>">Заказать</button>
                </div>
                <small class="text-muted"><?php echo $row['price']; ?> руб./шт</small>
              </div>
            </div>
          </div>
        </div>


        <?php $row = mysqli_fetch_array($result6); ?>
        <div class="col">
          <div class="card border-primary">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?php echo $row['photo']; ?>" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

            <div class="card-body">

              <p class="card-text"><?php echo $row['prod_name']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="btn btn-primary btn-buy" id="<?= $row['id_prod']; ?>">Заказать</button>
                </div>
                <small class="text-muted"><?php echo $row['price']; ?> руб./шт</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!--Album-->

  <footer class="text-muted py-5">
    <div class="container">

    </div>
  </footer>
  <script>
    $('.btn-buy').click(function() { //клип на кнопку
      var id = $(this).attr('id'); //получаем id этой кнопки
      $.ajax({ //передаем ajax-запросом данные
        type: "POST", //метод передачи данных
        url: 'Cart/backend/addtocart.php', //php-файл для обработки данных
        data: {
          id_prod: id
        }, //передаем наши данные
        success: function(data) { //
          //$('.basker_kol').html(data);
          alert("Товар добавлен в корзину") //меняем количество товаров на кнопке корзины 
        }
      });
    });
  </script>


</body>

</html>