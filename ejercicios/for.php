<?php 
// rango(inicio; final), avance: - + 
// i -> iteración
// j -> sinonimo de la i
for($i = 1; $i <= 10; $i++){
    echo "$i <br>";
    for($j = 1; $j <= 10; $j++){
        echo "<p style='color:red;'>$j</p><br>";
    }
}

/*
! tabla inicial = 1, final = 2
! rango inicial = 1, final = 3

! 1 x 1 = 1
! 1 x 2 = 2
! 1 x 3 = 3

! 2 x 1 = 2
! 2 x 2 = 4
! 2 x 3 = 6
*/




?>