<html>
    <body>

<?php
    $zmienna = 0;
    while($zmienna < 11) {
        echo $zmienna.'</br>';
        $zmienna++;
        if ($zmienna %3===0) 
		{
            echo "";
        }
		if ($zmienna === 3)
		{
			echo "Przez 3 jest podzielna liczba :";
		}
		if ($zmienna === 9)
		{
			echo "Przez 3 jest podzielna liczba :";
		}
		if ($zmienna === 6)
		{
			echo "Przez 3 jest podzielna liczba :";
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
