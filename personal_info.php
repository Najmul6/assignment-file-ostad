<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personal Info</title>
</head>
<body>
    <div class="calculator_section personal_info">
         <div class="container">
            <div class="form-wraper">
                <h4 class="form-title">Personal Info</h4>
                <table>
                        <?php
                            
                            $name= "Najmul";
                            $age= 24;
                            $country= "Bangladesh";
                            $briefIntroduction= "Time and tide wait for none, do?";

                        ?>
                        <ul class="info">
                            <li><?php echo "Name: ". $name; ?></li>
                            <li><?php echo "Age: ". $age; ?></li>
                            <li><?php echo "Country: ". $country; ?></li>
                            <li><?php echo "Brief Introduction: ". $briefIntroduction; ?></li>
                            
                        </ul>
                        
                    <!-- <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $country; ?></td>
                        <td><?php echo $briefIntroduction; ?></td>
                    </tr> -->

                </table>
            </div>   
         </div>
    </div>

   
</body>
</html>
