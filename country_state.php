<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country and State Form</title>
</head>
<body>
<?php
    // if the form is posted, grab the current option and set it to the variable to use as a sticky, and create a cookie
    if (isset($_POST['country'])){
        $country = $_POST['country'];
        setcookie('Country', $country, time() + 7200);
    } else {
        $country = "";
    }

    if (isset($_POST['state'])){
        $state = $_POST['state'];
        setcookie('State', $state, time() + 7200);
    } else {
        $state = "";
    }
?>

    <form name="cookieform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <select name="country" id="country">
        <option value="country-option" <?php if($country == "country-option") echo 'selected'; ?>>Select a country</option>
        <option value="united-states" <?php if($country == "united-states") echo 'selected'; ?>>United States</option>
        <option value="canada" <?php if($country == "canada") echo 'selected'; ?>>Canada</option>
        <option value="mexico" <?php if($country == "mexico") echo 'selected'; ?>>Mexico</option>
    </select>
    <br>
    <select name="state" id="state">
        <option value="state-option" <?php if($state == "state-option") echo 'selected'; ?>>Select a state</option>
        <option value="washington" <?php if($state == "washington") echo 'selected'; ?>>Washington</option>
        <option value="oregon" <?php if($state == "oregon") echo 'selected'; ?>>Oregon</option>
        <option value="california" <?php if($state == "california") echo 'selected'; ?>>California</option>
    </select>
    <br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <?php
    // displays a confirmation of cookies that are set if they are found
    if (isset($_COOKIE["Country"])) {
        echo "<p>The Country cookie is now set to: " . $_COOKIE["Country"] . " </p>";
    } 
    if (isset($_COOKIE["State"])) {
        echo "<p>The State cookie is now set to: " . $_COOKIE["State"] . " </p>";
    }
    ?>
</body>
</html>