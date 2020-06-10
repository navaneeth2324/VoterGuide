<html>
    <head>
    <title>View</title>
    <style>
    body{
        background-color:whitesmoke;
    }
    input{
        width:40%;
        height:5%;
        border:1px;
        border-radius:05px;
        padding:8px 15px 8px 15px;
        margin:10px 0px 15px 0px;
        box-shadow:1px 1px 2px 1px grey;
    }
    </style>
    </head>
    <body>
        <center>
        <h2>Search For a Record Here</h2>
        <form action="display.php" method="POST">
            <input type="text" name="pno" placeholder="Enter phone number to search"><br>
            <input type="submit" value="search" name="search">
        </form>
        <?php
            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'registration');

            if(isset($_POST['search'])){
                $pno=$_POST['pno'];

                $query3="SELECT * FROM  data where pno='$pno'";
                $query_run=mysqli_query($connection,$query3);

                while($row=mysqli_fetch_array($query_run))
                {
                    ?>
                        <form action="" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                        Name:<input type="text" name="name" value="<?php echo $row['name']?>"/><br>
                        Date of Birth:<input type="text" name="dob" value="<?php echo $row['dob']?>"/><br>
                        Phone Number:<input type="text" name="pno" value="<?php echo $row['pno']?>"/><br>
                        Address:<input type="text" name="address" value="<?php echo $row['address']?>"/><br>
                        </form>
                    <?php
                }
            }
        ?>
        </center>
    </body>
</html>