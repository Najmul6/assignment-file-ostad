<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Grade Calculator</title>
</head>
<body>
    <div class="calculator_section">
         <div class="container">
            <div class="form-wraper">
                <h4 class="form-title">Grade Calculator</h4>
                <form method="post">
                    <div class="full">
                        <label>Bangla:<br>
                            <input name="Bangla" required="required" step="0.000001" type="number" /><br>
                        </label><br>
                    </div>
                    <div class="full">
                        <label>English:<br>
                            <input name="English" required="required" step="0.000001" type="number" /><br>
                        </label><br>
                    </div>
                    <div class="full">
                        <label>Math:<br>
                            <input name="Math" required="required" step="0.000001" type="number" /><br>
                        </label><br>
                    </div>
                    <div class="button-cls">
                        <input value="Process" type="submit" />

                    <div class="output-cls">
                        <?php 
                            //add() function with two parameter  
                            if ($_SERVER['REQUEST_METHOD']=='POST'){
                                $Bangla = floatval ($_POST['Bangla']);
                                $English = floatval ($_POST['English']);
                                $Math = floatval ($_POST['Math']);
                                $marks=($Bangla+$English+$Math)/300*100;
                                // $point= 0;

                                if($marks>=90 && $marks<=100){
                                    echo '<div class="result">Grade: A+</div>';
                                    echo "<br>";
                                    $Point=4;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=80 && $marks<90){
                                    echo '<div class="result">Grade: A</div>';
                                    echo "<br>";
                                    $Point=4;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=70 && $marks<80){
                                    echo '<div class="result">Grade: A-</div>';
                                    echo "<br>";
                                    $Point=3.5;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=60 && $marks<70){
                                    echo '<div class="result">Grade: B</div>';
                                    echo "<br>";
                                    $Point=3.00;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=50 && $marks<60){
                                    echo '<div class="result">Grade: B+</div>';
                                    echo "<br>";
                                    $Point=2.50;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=40 && $marks<50){
                                    echo '<div class="result">Grade: B</div>';
                                    echo "<br>";
                                    $Point=2.20;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=33 && $marks<40){
                                    echo '<div class="result">Grade: C</div>';
                                    echo "<br>";
                                    $Point=2.00;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }if($marks>=0 && $marks<32){
                                    echo '<div class="result">Grade: F</div>';
                                    echo "<br>";
                                    $Point=0.00;
                                    echo '<div class="result">Value of Point:'.$Point.'</div>';
                                    echo "<br>";
                                }
                                echo '<div class="result">Value of Marks:'.$marks.'</div>';
                                echo "<br>";

                            }
                    
                        ?>
                    </div>   
                    </div>
                </form>
            </div>   
         </div>
    </div>

   
</body>
</html>
