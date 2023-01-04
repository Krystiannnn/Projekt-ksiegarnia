<?php
  
 $pageName = $_GET['action'] ?? null;   
 

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
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="#">Kategorie</a>
                    <ul>
                        <li><a href="?action=page1">Psychologiczne</a></li>
                        <li><a href="?action=page2">Przygodowe</a></li>
                        <li><a href="?action=page3">Klasyki</a></li>
                        <li><a href="?action=page4">Horrory</a></li>
                    </ul> 
                </li>
                <li><a href="nav/regulamin.html">Regulamin</a></li>
                <li><a href="nav/oautorach.html">O autorach</a></li>
                <li><a href="koszyk.php">Koszyk</a></li>
            </ol>
        </div>

        <section>
          <?php if ($pageName === 'page1') : ?>
            <div class="card-box">
                
                <div class="card">    
                    <img src="./img/zakochane.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Zakochane w psychopatach</h2>
                        <p>
                        Badacze z dziedzin psychologii szczególowo opisali rózne rodzaje psychopatii.Cena 60zł  
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=5">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/Przy.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Przyjemność</h2>
                        <p>
                        Dlaczego dzieło sztuki jest warte więcej niż falsyfikat? przeczytaj książkę!.Cena 50zł
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=6">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
               
               
               
               
            </div>
          <?php elseif ($pageName === 'page2') : ?>
            <div class="card-box">
                <div class="card">    
                    <img src="./img/harry.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Harry Potter</h2>
                        <p>
                        Harry Potter, sierota i podrzutek, od niemowlęcia wychowywany był przez ciotkę.Cena 50zł  
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=1">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
               
               
               
               
               
            </div>
          <?php elseif ($pageName === 'page3') : ?>
            <div class="card-box">
                <div class="card">    
                    <img src="./img/wladca.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Władca Pierścieni</h2>
                        <p>
                        Druga część "Władcy Pierścieni", porywającej przygody, stworzonej przez Tolkiena.Cena 80zł
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=2">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/wiedzmin.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Wiedzmin</h2>
                        <p>70 zł
                        Saga o Wiedźminie to cykl książek z gatunku fantasy.Cena 70zł 
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=4">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
               
               
           
            
           
           
        </div> 
          <?php elseif ($pageName === 'page4') : ?>
            <div class="card-box">
            
               
               
                <div class="card">    
                    <img src="./img/paranormal.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Paranormal Activity </h2>
                        <p>
                        Najstraszniejszy horror w dziejach, który zapamiętają wszyscy.Cena 40zł
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=3">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                
               
               
            </div>
          <?php else : ?>
            <div class="card-box">
            
                <div class="card">    
                    <img src="./img/harry.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Harry Potter</h2>
                        <p>
                         Harry Potter, sierota i podrzutek, od niemowlęcia wychowywany był przez ciotkę.Cena 50zł  
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=1">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/wladca.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Władca Pierścieni</h2>
                        <p>
                        Druga część "Władcy Pierścieni", porywającej przygody, stworzonej przez Tolkiena.Cena 80zł
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=2">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/paranormal.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Paranormal Activity </h2>
                        <p>
                        Najstraszniejszy horror w dziejach, który zapamiętają wszyscy.Cena 40zł
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=3">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/wiedzmin.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Wiedzmin</h2>
                        <p>
                        Saga o Wiedźminie to cykl książek z gatunku fantasy.Cena 70zł 
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=4">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/zakochane.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Zakochane w psychopatach</h2>
                        <p>
                        Badacze z dziedzin psychologii szczególowo opisali rózne rodzaje psychopatii.Cena 60zł 
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=5">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
                <div class="card">    
                    <img src="./img/Przy.jpg" alt="Danie 1">
                        <div class="card-body">
                        <h2>Przyjemność</h2>
                        <p>
                        Dlaczego dzieło sztuki jest warte więcej niż falsyfikat? przeczytaj książkę!.Cena 50zł
                        </p>
                        <a href="#" class="read-more">Czytaj więcej...</a>
                        <a href="koszyk.php?id=6">
                        <button>Dodaj do koszyka</button>
                        </a>
                        </div>             
                </div>
               
            </div>
          <?php endif; ?>        
        </section>
        
            
            
            
            
    
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