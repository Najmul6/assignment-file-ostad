<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Temperature Converter</title>
</head>
<body>
    <div class="calculator_section">
         <div class="container">
            <div class="form-wraper">
                <h4 class="form-title"> Temperature Converter</h4>
                <form method="post">
                    <div class="full">
                        <label>Enter value to convert:<br>
                            <input type="text" name="valueConvert" id="valueConvert" size="15"><br>
                        </label><br>
                    </div>
                    <div class="full">
                        <label>Convert to:<br>
                        <select name="convertType" id="convertType" size="1">
                            <option disabled> Select a measurement type</option>
                            <option value="celsius">Celsius</option>
                            <option value="fahrenheit">Fahrenheit</option>
                        </select><br>
                        </label><br>
                    </div>
                    
                    <div class="button-cls">
                        <input type="submit" name="btnConvert" id="btnConvert" value="Convert">
                        <input type="reset" name="btnReset" id="btnReset" value="Reset">
                    <div class="output-cls">
                    <?php
                        if($_POST){
                        $valueConvert = $_POST['valueConvert'];
                        $convertType = $_POST['convertType'];
                        // function tempConvert($valueConvert, $convertType){
                            if($convertType == "fahrenheit"){
                            $conversion = ((9/5)*$valueConvert) +(32);
                            // echo "The initial temperature was $valueConvert. The new temperature is $conversion.";
                            echo '<div class="result">The Even Number = '.$valueConvert .'<br>The New Temperature is '.$conversion."</div>";
                            
                        }
                            else if ($convertType == "celsius"){
                            $conversion = ($valueConvert - 32) * (9/5);
                            // echo "The initial temperature was $valueConvert. The new temperature is $conversion.";
                            echo '<div class="result">The Even Number = '.$valueConvert .'<br>The New Temperature is '.$conversion."</div>";
                        }
                        // return $conversion;
                        // }
                        // echo "The initial temperature was $valueConvert. The new temperature is $conversion.";
                        // echo "The initial temperature was $valueConvert. The new temperature is $conversion.";
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




<!-- <!DOCTYPE HTML>

<html>
<head> 
      <title>Temp Conversion</title>
      <meta charset="utf-8">
<body>
      <form name="tempConvert" method="POST">

<table>
<tr>
    <td>Enter value to convert</td>
    <td><input type="text" name="valueConvert" id="valueConvert" size="15"></td>
</tr>

<tr>
    <td>Convert to:</td>
    <td><select name="convertType" id="convertType" size="1">
               <option disabled> Select a measurement type</option>
               <option value="celsius">Celsius</option>
               <option value="fahrenheit">Fahrenheit</option>
        </select>
    </td>
</tr>

<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Convert"></td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>



</form>



    </body>
</html> -->