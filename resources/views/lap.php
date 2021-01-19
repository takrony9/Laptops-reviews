<!DOCTYPE html>
<html>
    <head>
        <title>results</title>
    </head>

    <body>
    <?php 
     $server ="localhost";
     $username ="root";
     $password ="";
     $dbname ="dbphpsearch";
     $conn = mysqli_connect($server, $username, $password, $dbname);
     

          $title = mysqli_real_escape_string($conn, $_GET['title']);
          $sql = "SELECT * FROM laptop WHERE title='$title'";
          $result = mysqli_query($conn, $sql);
          $resultNumber = mysqli_num_rows($result);

          if($resultNumber > 0){
            
            while($row = mysqli_fetch_assoc($result)){
              
              echo "<div>
              <h3>".$row['title']."</h3>
              <p>".$row['image']."</p>
              <p>Price: ".$row['price']."</p>
              <p>".$row['description']."</p>
              <p>".$row['details']."</p>
              <p>Review: ".$row['reviews']."</p>
              <p>Tech review: ".$row['tech_reviews']."</p>
              </div>";
            }
          } 
          

      ?>
    
    </body>
</html>




