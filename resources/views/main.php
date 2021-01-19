<!DOCTYPE html>
<html>
    <head>
        <title>search</title>
    </head>

    <body>
    <?php
use Hamcrest\Core\HasToString;

$server ="localhost";
     $username ="root";
     $password ="";
     $dbname ="test1";
     $conn = mysqli_connect($server, $username,$password, $dbname);
     echo $conn->$_REQUEST;
     ?>
     
     <form action="x" method="POST">

       <input type="text" name="search" placeholder="Search">
       <button type="submit" name="submit-search">submit</button>
      
      </form>

      <?php
        if(isset($_POST['submit-search'])){
          $search = mysqli_real_escape_string($conn, $_POST['search']);
          $sql = "SELECT * FROM products WHERE title LIKE '%$search%'";
          $result = mysqli_query($conn, $sql);
          $resultNumber = mysqli_num_rows($result);

          if($search==NULL){
            echo "you did not type anything to help you find!";
          }else{

          if($resultNumber > 0){
            
            while($row = mysqli_fetch_assoc($result)){
              echo "<a href='lap.php? title=".$row['title']."'>".$row['title']."</a><br>";
            }
          } 
          else {
            echo "there are no results matching your search! ";
          }
        }
        }

      ?>
    
    </body>
</html>


