<?php
    $host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbsurvey";

	$con = mysqli_connect($host,$username,$password,$dbname) or die(" No connection to the database");

    //total number of surveys completed
    $sql = "SELECT COUNT(*) FROM details";
    $totSurveys = mysqli_query($con,$sql);

    if($res = mysqli_fetch_array($totSurveys)){
        $totSurveys = $res[0];
    }

    //average age
    $sql1 = "SELECT AVG(age) FROM details";
    $AVGage = mysqli_query($con,$sql1);

    if($res1 = mysqli_fetch_array($AVGage)){
        $AVGage = $res1[0];
    }

    //max age
    $sql2 = "SELECT MAX(age) FROM details";
    $MaxAge = mysqli_query($con,$sql2);

    if($res2 = mysqli_fetch_array($MaxAge)){
        $MaxAge = $res2[0];
    }

    //min Age
    $sql3 = "SELECT MIN(age) FROM details";
    $MinAge = mysqli_query($con,$sql3);

    if($res3 = mysqli_fetch_array($MinAge)){
        $MinAge = $res3[0];
    }
    mysqli_close($con);
    
?>