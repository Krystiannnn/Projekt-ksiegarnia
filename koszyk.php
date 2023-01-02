<?php
 session_start();
 //tworzymy sesję do zapamiętywania id produktów
 
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
    <div class="wrapper">
        <div class="header">
           <div class="logo"><span style="color: #c34f4f">Księ</span>garnia</div>
        </div> 
        <div class="nav">
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="#">Kategorie</a>
                    <ul>
                        <li><a href="#">Psychologiczne</a></li>
                        <li><a href="#">Poradniki</a></li>
                        <li><a href="#">Dramaty</a></li>
                        <li><a href="#">Horrory</a></li>
                    </ul> 
                </li>
                <li><a href="nav/regulamin.html">Regulamin</a></li>
                <li><a href="nav/oautorach.html">O autorach</a></li>
                <li><a href="#">Koszyk</a></li>
            </ol>
        </div>

        <div class="content">
        <?php   
        echo 'KOSZYK';
        //var_dump($_SESSION['cart']); 
        //var_dump($_REQUEST); odebranie id z inputa produktu bez sesji
        if(isset($_REQUEST{'id'}))
            {      
                    if(isset($_SESSION{'cart'}))
                {
                    array_push($_SESSION['cart'], $_REQUEST['id']);    
                }
                else
                {
                    $_SESSION['cart'] = array();
                    array_push($_SESSION['cart'], $_REQUEST['id']);
                }
            }  
            if(isset($_REQUEST['remove']))
                array_splice($_SESSION['cart'], $_REQUEST['remove'], 1);
            if (isset($_SESSION['cart'])){
                require_once "connect.php";

	            $db = @new mysqli($host, $db_user, $db_password, $db_name);
                $q = "SELECT * FROM produkt";
                $result = $db->query($q);
                $names = array();
                $prices = array();
                while($row = $result->fetch_assoc()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = $row['price'];
                    $names[$id] = $name;
                    $prices[$id] = $price;
                }
                echo '<table>';
                $sum = 0;
                foreach ($_SESSION['cart'] as $id => $cartItem){
                    echo '<tr>';
                    echo '<td>' . $names[$cartItem] . '</td>';
                    echo '<td>' . $prices[$cartItem] . '</td>';
                    echo '<td><a href="koszyk.php?remove=' . $id
                            . '"<span style="color: #c34f4f">Usuń</span></a>';
                    echo '</tr>';
                    $sum += $prices[$cartItem];
                }
                echo '</table>';
                echo 'Suma zamówienia:' . $sum . ' zł';
            } else {
                echo '<br>koszyk jest pusty';
            }
            //echo '<table>'; //tabela wyświetlania id produktów
                // foreach ($_SESSION['cart'] as $cartItem) {
                // echo '<tr><td>'.$cartItem.'</td></tr>';
                // }
                // echo '</table>';
        // var_dump($_SESSION); z sesją do zapamiętania produktów  

        
        if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
        {
            echo "<form action='order.php' method='post'>
            <input type='submit' value='Zamów' />
            </form> ";
            echo "<p>Witaj ".$_SESSION['user'].'!  <a href="logout.php"<span style="color: #c34f4f">Wyloguj się!</span></a> </p>';
        } else {
            echo " <br>
            <h1>Zaloguj się aby zamówić</h1>";
            echo "<form action='zaloguj.php' method='post'>
            Login: <br /> <input type='text' name='login' /> <br />
            Hasło: <br /> <input type='password' name='haslo' /> <br /><br />
            <input type='submit' value='Zaloguj się' />
            </form> ";
            echo " <br>
            <a href='rejestracja.php'<span style='color: #c34f4f'>Rejestracja - załóż darmowe konto!</span></a>
            <br /><br />";}
        ?>
        
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>



        
        
        
            
            
        </div>
        
        <div class="socials">
            <div class="socialdivs">
                <div class="fb">facebook</div>
                <div class="yt">youtube</div>
                <div class="tw">twitter</div>
                
                <div style="clear:both"></div>
            </div>
        </div>
        <div class="footer">Księgarnia &copy; 2022 thank you for your visit !</div>
    </div>


    
</body>
</html>
       
        
       
    
       
        
         
        
         





