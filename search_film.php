<?php 
session_start(); 
require_once("app/koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MITLA Search Film</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <?php require_once("header.php"); ?>

	
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="login-panel panel panel-default">
            <div class="panel-heading">Search Film</div>
            <div class="panel-body">
              <form action="act.php?code=search_film" method="POST" data-toggle="validator" role="form">
                <fieldset>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Pencarian Film</td>
                        <td><input type="text" name="searchkey" class="form-control" placeholder="Judul Film"></td>
                      </tr>
                      <tr>
                        <td>Pilih Berdasarkan Genre</td>
                        <td>
                          <?php 
                          $a = "SELECT * FROM label";
                          $b = mysqli_query($connect, $a);
                          while($dt = mysqli_fetch_array($b)) { ?>   
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="labelid[]" value="<?=$dt['label_id']?>"> <?=$dt['nama']?>
                              </label>
                            </div>
                          <?php } ?>
                          
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div align="right">
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <button type="reset" class="btn btn-primary">Hapus Filter</button>
                  </div>
                </fieldset>
              </form>

              <hr>

              <?php if (isset($_SESSION['check'])): 
                $searchkey = $_SESSION['searchkey'];
                $check_total = $_SESSION['check_total'];
                $labelid = $_SESSION['labelid'];
              ?>
                
                <table class="table table-stripped table-bordered">
                  <thead>
                    <th>No</th>
                    <th>ID Film</th>
                    <th>Judul</th>
                    <th>Genre</th>
                  </thead>
                  <tbody>
                    <?php 
                      $no=1;
                      if ($check_total == 0) {
                        $a = "SELECT f.film_id, f.nama AS nama_film, group_concat(l.nama SEPARATOR ', ') AS nama_label FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE film_id IN(SELECT f.film_id FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) GROUP BY film_id HAVING(count(f.film_id) >= $check_total)) AND f.nama LIKE '%$searchkey%' GROUP BY film_id";
                      }else{
                        $a = "SELECT f.film_id, f.nama AS nama_film, group_concat(l.nama SEPARATOR ', ') AS nama_label FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE film_id IN(SELECT f.film_id FROM label_film RIGHT JOIN film f using(film_id) LEFT JOIN label l using(label_id) WHERE label_id IN($labelid) GROUP BY film_id HAVING(count(f.film_id) >= $check_total)) AND f.nama LIKE '%$searchkey%' GROUP BY film_id";
                      }
                      $b = mysqli_query($connect, $a);
                      while($dt = mysqli_fetch_array($b)) {
                    ?>
                      <tr>
                        <td><?=$no++;?></td>  
                        <td><?=$dt['film_id']?></td>  
                        <td><?=$dt['nama_film']?></td>  
                        <td><?=$dt['nama_label']?></td>  
                      </tr>

                    <?php
                    unset($_SESSION['check']);
                    unset($_SESSION['searchkey']);
                    unset($_SESSION['check_total']);
                    unset($_SESSION['labelid']);

                    } ?>
                  </tbody>
                </table>

              <?php endif ?>
              


            </div>
          </div>
        </div><!-- /.col-->
      </div><!-- /.row -->
    </div>


	  <?php require_once("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.js"></script>
    
  </body>
</html>