<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Even or Odd Checker</title>
</head>
<body>
    <div class="calculator_section">
         <div class="container">
            <div class="form-wraper">
                <h4 class="form-title">Even or Odd Checker</h4>
                <form method="post">
                    <div class="full">
                        <label>Input Number:<br>
                            <input type="number" name="number"><br>
                        </label><br>
                    </div>
                
                    <div class="button-cls">
                        <input type="submit" value="Submit"/>

                    <div class="output-cls">
                        <?php 
                            //even Odd Number
                            if($_POST){
                                $number = $_POST['number'];  
                                if(($number%2)==0){
                                    echo '<div class="result">The Even Number = '.$number ."</div>";
                                }else{
                                    echo '<div class="result">The Odd Number = '.$number ."</div>";
                                } 
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
