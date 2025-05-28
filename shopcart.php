<?php
       
            $nid=$_GET['id'];
            $newquantity = $_POST['quantity'];
            $newprice = $_POST['price'];
            $newtotal = $newquantity*$newprice;

            

            $sqlnew = "UPDATE shoppingcart SET quantity = '$newquantity', total = '$newtotal' where id = '$nid'";
            $connection->query($sqlnew);
            header('location:shop.php');
        
        ?>