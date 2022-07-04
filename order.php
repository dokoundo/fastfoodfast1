<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastfood Order</title>
    <link rel="stylesheet"href="style/index.css?V=<?php echo time();?>">
<script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=EXdaeNGgA4lkxr4kr3g6vkccBPi59VIibhHfRRXt4V5GUJnA1pSr_0bv_PtBD8GpL8vdBcSrzA4SLgmBpqGqoZSG1G7fPUXd0zHZjK_BW-GcKXE9WMVanpzbuKLiEwsithn_905PVzBybdDxw0LDntMtp49KLr8BjQr1SOxP-RrG5LaW6WYHAvXMLeTb1T3fQFUSWhwfZp24BfaSUFsMmZw5VHKMYxD8toiHihgb3hk1KbU8muUaGLgCvUypc5x0UtKEU7OFOjiEC6V_berhz6BOyRn-DIJVajsolLKUj9zST1FICNCR4sCOU0kIlXo_knzMmgWRwIKPBDiiWsy-NSlQ_AFlAFKTaSlBfAO7lVC7y0q-NrLoT6U_N5PmVps-W0Ky6tkQROMuddpw5doXWTlOuHa4hh8MUZmcYpxWMp62o8Neq9lODMhG2c225T-XGfTYVWhCa4E-m9gzT5TvdiBsho6bT446WxHoSlhWnpaz4HL0QjEwlk6jQzGINJihFna5qZzqeurONzkaLBlnPjcZwUWLK0N3MM-x4jub9mHwSIYFerPJpwVi7NgR_eFTVj_NrunZ8lR3LrfMLS1QMGWERi48GKAn5IvdoJYalPDSglZyaNFLq4XslXCP8fYp5D15LLeBDEtfIU9aJMqA6O2ZmvsARF6UJDBVnzhtSlglNwuVEbSDYj0dc0TwKxP5Aqc5aIfne1dBZmkuGmhdX9b3r_RNOJ_sTkQFFsu0iqUXhDzR0fzD8xnUiFifhu2D5ivtk28dZtzfPCFoSxWtNvAt1cgcxG4OOc3ozb7SKiWED3dRf0AfJ0HqmB0SzIPLwMzP71moSf_oqRd4xPrLVu8yRd0wo54fnYsmy_5qxzng_hk-dqnNBnGqZ_kXE9xxe1WOa0Xw6a6ByAQFdQS6WucrTUIp6R6MiRkfA3sVdb0k_pu6I84WFml8peFr0X9jOh0RNRH9kPg-NPP8mEUjhHORjtR1QM5yMvlQZCyr0jV5jLt1IEp2TnUKWLPotbhV4GOz_C24ZWh0JlRujQCXzO0QfNCYbt29nY76ptX9-X6NXu8W6DqK_nHpe63ePFY7AuJ4KCZWtuLPMdvnAUEp4wY8CTt0sjmRbnfXtdpXHYFgoX7I7UTcWhi2JEAnSy5gheQ7A8SyzjVSMIQUGmkqMCFw0YDLZWcwJmeEXftXAMtcvKPIt_gH3MLPYtJ74Csi_oIBTK-UxhDEDrM0PzTxVNn5j6MsbkdewzQcTeKuh_BfnhJhLNlYykMCn74TIBTeGiXgUDjO0aZHmPKzL27JmpfQaPs-E-cvMGBg-CuqX3-9keQQB6LXNdGZdCcrTUhmX7cBlV3mqPxQ27HuN6nqgQ" charset="UTF-8"></script></head>
<body>
    <div class="order-container">
    <div class="navbar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About Us</a></li>
            <li><a href="order.php">Shop</a></li>
            <li><a href="index.html">Contact Us</a></li>
        </ul>
    </div>
    <!--end of navbar-->
    <div class="a">
    <div class="order-form">
    <form action="order.php"method="POST">
            <input type="text"placeholder="Name"name="name"required><br>
            <input type="number"placeholder="Phone Number"name="phone"required><br>
            <select name="type">
                <option value="Ugali">Ugali</option>
                <option value="Kales">Kales</option>
                <option value="Burger">Burger</option>
                <option value="Coffee">Coffee</option>
                <option value="Pizza">Pizza</option>
                <option value="Matoke">Matoke</option>
            </select>
            <input type="number"placeholder="Quantity"name="quantity"required><br>
            <input type="submit"value="Order"name="btn-order">
        </form>
        </div>
    <div class="make-order">
        <!--for decoration-->
    </div>
    </div>
    
    <div class="b">
        <h3>Menu</h3>
        <div class="order-table">
        <table cellspacing="0">
            <thead>
                <tr>
                    <th>FOOD</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="pics/ugali.webp"><br>Ugali</td>
                    <td>A Kenyan food made from maize flour</td>
                    <td>Ksh. 300</td>
                </tr>
                <tr>
                    <td><img src="pics/kales.jpg"><br>Kales</td>
                    <td>A ruffled-leafed green vegetable.Commonly used as a 
                        garnish for food presentation or as a cooked vegetable.</td>
                    <td>Ksh. 200</td>
                </tr>
                <tr>
                    <td><img src="pics/burger.jpg"><br>Burger</td>
                    <td>Sandwich made from ground meats that are formed 
                        into a patty, cooked, and placed between two halves of a bun.</td>
                    <td>Ksh. 500</td>
                </tr>
                <tr>
                    <td><img src="pics/coffee.jpg"><br>Coffee</td>
                    <td> a beverage brewed from the roasted and ground seeds of the 
                        tropical evergreen coffee plant</td>
                    <td>Ksh. 100</td>
                </tr>
                <tr>
                    <td><img src="pics/pizza.jpg"><br>Pizza</td>
                    <td>A dish of Italian origin consisting of a flattened disk of bread 
                        dough topped with some combination of olive oil, oregano, tomato</td>
                    <td>Ksh. 900</td>
                </tr>
                <tr>
                    <td><img src="pics/matoke.jpg"><br>Matoke</td>
                    <td>Originating from Kisii and Uganda. Made from cooked bananas</td>
                    <td>Ksh. 600</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    </div>
</body>
</html>
<!--php-->
<?php
//database connection
$server='localhost';
$name='root';
$pass='';
$dbname='fastfood';

$con=mysqli_connect($server, $name, $pass, $dbname);

if(isset($_POST['btn-order'])){
    //getting data from html
    $username=$_POST['name'];
    $phone=$_POST['phone'];
    $type=$_POST['type'];
    $quantity=$_POST['quantity'];

    //inserting into database
    $query="insert into orders(name, phone, type, quantity) values('$username', '$phone', '$type', '$quantity')";
    if($con->query($query)){
        echo "<script>alert('Order placed');</script>";
    }else{
        echo "<script>alert('Failed!');</script>";
    }
}
?>