<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Comparison Tool</title>
</head>
<body>
    <div class="calculator_section">
         <div class="container">
            <div class="form-wraper">
                <h4 class="form-title">Comparison Tool</h4>
                <form method="post">
                    <div class="full">
                        <label>Number-1:<br>
                            <input type="number" name="number1"><br>
                        </label><br>
                        <label>Number-2:<br>
                            <input type="number" name="number2"><br>
                        </label><br>
                    </div>
                
                    <div class="button-cls">
                        <input type="submit" value="Result"/>

                    <div class="output-cls">
                        <?php 
                            //even Odd Number
                            if($_POST){
                                $number1 = $_POST['number1'];  
                                $number2 = $_POST['number2']; 
                                
                                $result= isset($_POST['number1']) > isset($_POST['number2']) ?  $number1  :  $number2 ;
                                // echo $result;
                            echo '<div class="result">Largest number between = '  .$number1 . ' and ' .$number2 .' is ' . $result."</div>";
                                // if($number1 > $number2){
                                //     echo '<div class="result">This Large Number = '.$number1 ."</div>";
                                // }else{
                                //     echo '<div class="result">This Small Number = '.$number2 ."</div>";
                                // } 
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
