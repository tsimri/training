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
			echo "Liczba ";
		}
		if ($zmienna === 3 +1)
		{
			echo "jest podzielna przez 3</br>";
		}
		if ($zmienna === 9)
		{
			echo "Liczba ";
		}
		if ($zmienna === 9 +1)
		{
			echo "jest podzielna przez 3</br>";
		}
		if ($zmienna === 6)
		{
			echo "Liczba ";
		}
		if ($zmienna === 6 +1)
		{
			echo "jest podzielna przez 3</br>";
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
