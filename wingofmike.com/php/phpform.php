<html>
    <body>
        <form action="phpform.php" method="get">
          Name:<input type="text" name="username" id=""><br><br>
          Email:<input type="email" name="email" id=""><br><br>
          Comment:<textarea name="comment" id="" cols="10" rows="5"></textarea><br><br>
          Gender:<input type="radio" name="gender" id="" value="male">Male
          <input type="radio" name="gender" id="" value="female">Female<br><br>
          <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if($_GET['submit']){
          echo $_GET['username']."<br>";
          echo $_GET['email']."<br>";  
          echo $_GET['comment']."</br>";
          echo $_GET['gender']."<br>";
          


        }
        ?>
    </body>
</html>