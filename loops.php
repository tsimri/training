<html>
    <body>

<?php
    $zmienna = 0;
    while($zmienna < 11) {
        echo $zmienna;
        $zmienna++;
        if ($zmienna %3===0) 
		{
            echo "</br>Podzielna przez 3</br>";
        }
		if ($zmienna = 3)
		{
			echo "</br>---</br>";
		}
    }
    echo $zmienna . "</br>";
    echo 0/3  . "</br>";
    echo 1/3 . "</br>";
    echo 3/3 . "</br></br></br>";

    echo 0%3 . "</br>";
    echo 1%3 . "</br>";
    echo 3%3 . "</br>";
?>

    </body>
</html>
