<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>
</head>
<body>
    <div class="calculator_section">
         <div class="container">
            <div class="form-wraper">
                <h4 class="form-title">Simple Calculator</h4>
                <form method="post">
                    <div class="full">
                        <label>First Number:<br>
                            <input type="number" name="firstNumber"><br>
                        </label><br>
                    </div>
                    <div class="full">
                        <label>Second Number:<br>
                            <input type="number" name="secondNumber"><br>
                        </label><br>
                    </div>
                    <div class="button-cls">
                        <input type="submit" name="add" value="Addition"/>  
                        <input type="submit" name="sub" value="Subtraction"/>
                        <input type="submit" name="mult" value="Multiplication"/>
                        <input type="submit" name="div" value="Division"/>

                    <div class="output-cls">
                        <?php 
                            //add() function with two parameter  

                            function add($x,$y){
                                $sum= $x+$y;
                                echo '<div class="result">Sum= '.$sum ."</div>";
                            }

                            //sub() function with two parameter  
                            
                            function sub($x,$y){
                                $sub= $x-$y;
                                echo '<div class="result">Sub= '.$sub ."</div>";
                            }

                            //Mult() function with two parameter

                            function mult($x,$y){
                                $mult= $x*$y;
                                echo '<div class="result">Mult= '.$mult ."</div>";
                            }

                            //Div() function with two parameter

                            function div($x,$y){
                                $div= $x/$y;
                                echo '<div class="result">Div= '.$div ."</div>";
                            }

                            if(isset($_POST['add'])){
                                add($_POST['firstNumber'], $_POST['secondNumber']);
                            }

                            if(isset($_POST['sub'])){
                                sub($_POST['firstNumber'], $_POST['secondNumber']);
                            }

                            if(isset($_POST['mult'])){
                                mult($_POST['firstNumber'], $_POST['secondNumber']);
                            }

                            if(isset($_POST['div'])){
                                div($_POST['firstNumber'], $_POST['secondNumber']);
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
