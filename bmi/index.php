
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $weight = floatval($_POST["weight"]);
        $height = floatval($_POST["height"]);

        // Calculate BMI
        $height_m = $height / 100.0;
        $bmi = $weight / ($height_m * $height_m);

        
    }
    ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>BMI Calculator</h1>
        <form method="post">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" step="0.01" required>
            
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" step="0.01" required>
            
            <input type="submit" value="Calculate BMI">
        </form>
        <?php if (isset($bmi)) : ?>
        <p class="result" id="bmiResult"> 
       Your BMI is:   <?=number_format($bmi, 2)?></p>
       <?php
           else : ?>
           <p class="result" id="bmiResult"> 
      Put Your Height and Weight Above</p>
      <?php endif; ?>
    </div>


</body>
</html>
