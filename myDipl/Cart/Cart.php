<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "workshop");
$query = "select * from `product` inner join `ShopCart` on Product.id_prod=ShopCart.id_prod";
$result1 = mysqli_query($connect, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
  <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
  <!-- <script type="text/javascript" src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script> -->
  <script src="https://bootstraptema.ru/_sf/3/394.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="CartCss.css">
  <link rel="shortcut icon" href="/myDipl/img/shopping-cart.ico" type="image/x-icon">
  <title>Cart</title>
</head>

<body>

  <style>
    body {
      background-color: #556B2F;
    }
  </style>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">


        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/site/myDipl/Glav.php" class="nav-link px-2 text-white">LoftPRO</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
              Товары
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

              <li><a class="dropdown-item" href="/site/myDipl/Maf.php">Малые архитектурные формы</a></li>
              <li><a class="dropdown-item" href="/site/myDipl/Sad.php">Садово-парковая мебель</a></li>
              <li><a class="dropdown-item" href="/site/myDipl/Top.php">Топиарные и светодиодные фигуры</a></li>
            </ul>
          </li>
          <li><a class="nav-link px-2 text-secondary" href="/site/myDipl/Info.html">О нас</a></li>

          <li><a class="nav-link px-2 text-secondary" href="Cart.php">Корзина</a></li>
        </ul>


        <form class="d-flex" action="/site/myDipl/Search.php" method="post">
          <input class="form-control me-2" type="text" placeholder="Поиск" aria-label="Поиск" id="searchText" name="searchText">
          <input type="submit" class="btn btn-outline-success" value="Поиск"></a>

        </form>



        <div class="text-end" style="margin-left:10px;">

          <a class="btn btn-outline-primary" href="/site/myDipl/Glav.php">Войти</a>
        </div>
      </div>
    </div>
  </header>

  <div class="shopping-cart">
    <!-- Title -->
    <div class="title">
      Корзина товаров
    </div>
    <?php
    $total_cost =0;
    if (isset($_SESSION['id_us'])) {
      if (mysqli_num_rows($result1) == 0) {
        echo "<div class='item' style=' color: gray; margin-left: 30%'><font size = '5'>Корзина пуста!</font></div>";
      } else {
        while ($row1 = mysqli_fetch_array($result1)) :
          $total_cost += $row1['price'];
    ?>
          <!-- Товар #1 -->
          <div class="item">
            <div class="buttons">
              <a href="?id_prod=<?= $row1['id_prod']; ?>" data-bs-toggle="modal" data-bs-target="#delete<?= $row1['id_prod']; ?>">
                <button class="delete-btnn" type="button"></button></a>
              <!-- <a href =" ?id=<?= $customer[0] ?>" data-toggle="modal" data-target="#delete<?= $customer[0] ?>">
                  <button class="btn btn-danger ml-3" type="button">Удалить</button></a></td> -->
            </div>
            <div class="image">
              <img src="/site/myDipl/img/<?php echo $row1['photo']; ?>" width="120px" height="80px" />
            </div>

            <div class="description">
              <span><?php echo $row1['prod_name']; ?></span>
            </div>
            
            <div class="total-price">
              <?php echo $row1['price']; ?>
            </div>
            <!-- Modal delete -->
            <div class="modal fade" id="delete<?= $row1['id_prod']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">А
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Действительно удалить?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="backend/cartdel.php" method="POST">
                    <input type="hidden" name="id_prod" value="<?= $row1['id_prod']; ?>">
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-outline-danger">Удалить</button>
                      <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <div class="item">
          <div class="total-price-text">
            Общая стоимость:
          </div>
          <span class="total-cost"> <?= $total_cost ?> </span>

          <button type="button" class="order-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Заказать</button>

        </div>

      <?php } ?>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="backend/orderhandler.php" method="POST">
            <div class="form-group">
              <label for="exampleFormControlInput1">Ваше имя</label>
              <input type="text" class="form-control" name="customer_name" placeholder="Например: Иван"required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Ваш телефон</label>
              <input type="text" class="form-control" name="phone_number" placeholder="Например: +375(код оператора)9999999"pattern='\s{0,}\+{1,1}375\s{0,}\({0,1}(([2]{1}([5]{1}|[9]{1}))|([3]{1}[3]{1})|([4]{1}[4]{1}))\)\s{0,}[0-9]{3,3}\s{0,}[0-9]{4,4}' required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput2">Адрес электронной почты</label>
              <input type="email" class="form-control" name="mail" placeholder="Например: qwert@mail.ru"required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Примечание</label>
              <textarea class="form-control" name="address" rows="3" placeholder="Ваш адрес или примечание"required></textarea>
            </div>
            <br>
            <select name="pay" class="form-select" aria-label="Default select example"required>
              <option selected>Выберите способ облаты</option>
              <option value="Картой">Картой</option>
              <option value="Наличными">Наличными</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary">Оформить</button>
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<?php
    } else {
      echo "<div class='item' style=' color: gray; margin-left: 13%'>
            <font size = '6'>Войдите или зарегестрируйтесь!</font>
            </div";
    } ?>



</body>


</html>