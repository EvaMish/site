<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    


    
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</head>
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
          <li><a  class="nav-link px-2 text-secondary" href="Info.html">О нас</a></li>
          
          <li><a  class="nav-link px-2 text-secondary" href="/site/myDipl/Cart/Cart.php">Корзина</a></li>
        </ul>

        <form class="d-flex" action="Search.php" method="post">
        <input class="form-control me-2" type="text" placeholder="Поиск" aria-label="Поиск" id = "searchText" name = "searchText">
        <input type="submit" class="btn btn-outline-success"  value="Поиск"></a>
      </form>
      
          
    

        <div class="text-end" style="margin-left:10px;">
         
        <a class="btn btn-outline-primary"  href="Glav.php">Войти</a>
        </div>
      </div>
    </div>
  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/form.js"></script>
</body>
</html>


<?php

$link = mysqli_connect("localhost", "root", "", "workshop");
if($_POST != NULL)
{
    $searchText = $_POST['searchText'];         
           
        $query = "Select id_prod from Product where prod_name like '%".$searchText."%'";
        $result1 = mysqli_query($link, $query);
        $counter=0;
        if($searchText==""){
          $counter = 1;
          echo "<p class='text-center fs-3' style='margin-top: 357px; color: gray;'>По вашему запросу ничего не найдено</p>";
      }
        else{
          echo "<div class='container' style=  'margin-top: 20px'>";
                  echo "<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>";
            while ($row = mysqli_fetch_array($result1)) {
                
                $query = "SELECT * FROM `product` where id_prod = ".$row[0]."";
                $result = mysqli_query($link, $query);
                $row1 = mysqli_fetch_array($result);
                if (isset($row1['photo']))
                {
                $counter=1;
                 echo" <div class='col'>";
                 echo "<div class='card border-primary'>";
                 echo "<img class='bd-placeholder-img card-img-top' width='100%' height='225'  src='img/".$row1['photo']."' xmlns='http://www.w3.org/2000/svg' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' role='img' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'></text></img>";                
                 echo "<div class='card-body'>";
                 echo "<p class='card-text'>".$row1['prod_name']."</p>";
                 echo "<div class='d-flex justify-content-between align-items-center'>";
                 echo "<div class='btn-group'>";
                 //echo "<a class='btn btn-primary' href='#' role='button'>Заказать</a>";
                 echo "<small class='text-muted'>".$row1['price']." руб./шт</small>";
                 echo "</div>";
                
                 echo "</div>";
                 echo "</div>";
                 echo "</div>";
                 echo "</div>";
                }
            }
            echo "</div>";
            echo "</div><br>";
        }
        if ($counter==0)
        {
          echo "<p class='text-center fs-3' style='margin-top: 350px; color: gray;'>По вашему запросу ничего не найдено</p>";
        }
    
    mysqli_close($link);
}
?>

