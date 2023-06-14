<?php
    include("calculations.php");
    $host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbsurvey";

	$con = mysqli_connect($host,$username,$password,$dbname) or die(" No connection to the database");

    if(isset($_POST['submitResults'])){
        echo "<script> alert('Thank you') </script>";
        echo "<script> window.location.href='index.php' </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RESULTS OF THE SURVEY</title>
        <link rel="stylesheet" href="styles2.css"></link>
    </head>

    <body>

        <form action = results.php method = "post">
            <div class = "boxResults">
                <label for = "noSurveys">Total number of surveys:</label>
                <input type = "text" id = "noSurveys" name = "noSurveys" readonly value = "<?php echo $totSurveys ?>">
                <br></br>

                <label for = "avgAge">Average age:</label>
                <input type = "text" id = "avgAge" name = "avgAge" readonly value = "<?php echo $AVGage ?>">
                <br></br>

                <label for = "oldest">Oldest person who participated in survey</label>
                <input type = "text" id = "oldest" name = "oldest" readonly value = "<?php echo $MaxAge ?>">
                <br></br>

                <label for = "youngest">Youngest person who participated in survey</label>
                <input type = "text" id = "youngest" name = "youngest" readonly value = "<?php echo $MinAge ?>">
                <br></br>

                <label for = "perPizza">Percentage of people who like Pizza:</label>
                <input type = "text" id = "perPizza" name = "perPizza"></input>
                <br></br>
                
                <label for = "perPasta">Percentage of people who like Pasta:</label>
                <input type = "text" id = "perPasta" name = "perPasta"></input>
                <br></br>
                
                <label for = "perPapWors">Percentage of people who like Pap and Wors:</label>
                <input type = "text" id = "perPapWors" name = "perPapWors"></input>
                <br></br>

                <label for = "AvgEatOut">People like to eat out:</label>
                <input type = "text" id = "AvgEatOut" name = "AvgEatOut"></input>
                <br></br>
                
                <label for = "AvgMovies">People who like to watch movies:</label>
                <input type = "text" id = "AvgMovies" name = "AvgMovies"></input>
                <br></br>
                
                <label for = "AvgTv">People who like to watch Tv:</label>
                <input type = "text" id = "AvgTv" name = "AvgTv"></input>
                <br></br>
                
                <label for = "AvgRadio">People who like to listen to radio:</label>
                <input type = "text" id = "AvgRadio" name = "AvgRadio"></input>
                <br></br>

                <div class = "submitResults">
                    <input type = "submit" id = "submitResults" name = "submitResults" value = "OK">
                </div>
            </div>
        </form>
    </body>
</html>