<?php

    function triangleUpsideLeft($star=5){
        for($a=$star;$a>0;$a--){
        for($b=$star;$b>=$a;$b--){
            echo "*";
        }
        echo "<br>";
        }
    }

    function triangleDownsideLeft($star=5){
        for($a=$star;$a>0;$a--){
            for($b=1;$b<$a;$b++){
                echo "*";
            }
            echo "<br>";
            }
    }

    function triangleDownsideRight($star=5){
	for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
    }

    function triangleUpsideRight($star=5){
        for($a=1; $a<=$star; $a++){
        for($i=1; $i<=$a; $i++){
                echo " &nbsp";
        }
        for($c=$star; $c>=$a; $c--){
            echo "*";
        }
        echo "<br>";
        }
    }

    function check(int $angka){
        if ($angka>4){
            echo "Angka tidak boleh lebih dari 4";
        }else{
            echo "<br>";
            echo "bentuknya adalah :";
            echo "<br>";
            return show($angka);
        }
        
    }

    function show($angka){
        switch($angka){
            case 1: 
                echo "<br>";
                triangleDownsideLeft();
                break;
            case 2:
                echo "<br>";
                triangleDownsideRight();
                break;
            case 3:
                echo "<br>";
                triangleUpsideLeft();
                break;
            case 4 :
                echo "<br>";
                triangleUpsideRight();
                break;
        }
    }
?>



<html>
<body>

Kamu memilih angka <?php echo $_GET["number"]; ?><br>
<?php check($_GET["number"])?>
</body>
</html>
