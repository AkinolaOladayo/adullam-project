
<?php
session_start();
include "homeheader1.php";
?>
<?php
require 'dbconnect.php';
require 'core.inc.php';
?>
<html>
<head>
    <title></title>
    <link type="text/css" href="style2.css" rel="stylesheet">
</head>
</html>
<body>
<div class="container">
    <div class="sidebar">
        <ul id="nav">
            <li><a href="jibowu1.php">ABIOLA APPLICANTS</a></li>
                    <li><a href="jibowu1.php">AKINDEKO APPLICANTS</a></li>

                    <li><a href="jibowu1.php">ADENIYI APPLICANTS</a></li>
                    <li><a href="jibowu1.php">JADESOLA APPLICANTS</a></li>
                    <li><a href="jibowu1.php">JIBOWU APPLICANTS</a></li>
                    <li><a href="jibowu1.php">JIBOWU ANNEX APPLICANTS</a></li>
                      <li><a href="jibowu1.php">JIBOWU ANNEX 1 APPLICANTS</a></li>
                        <li><a href="jibowu1.php">JIBOWU ANNEX 3 APPLICANTS</a></li>
        </ul>
    </div>

    <div class="content">
        <p>DashBoard</p>


        <div id="box">
            <div class="box-top">
             <?php
               $username=$_SESSION['username'];
            echo "Welcome <strong>" . $username
            . "</strong> [<a href='logout.php'>logout</a>]";

           ?>  
            </div>

        </div>
    </div>
</div>
</body>