<?php require('connectdb.php'); 
      include('process.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/76e1122cdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="brand-logo">
                <h1>RRU</h1>
            </div>
            <ul class="menu">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#" class="manageBtn">Manage<i class="fas fa-caret-down"></i></a>
                    <ul>
                        <li><a href="prefix_page.php">Prefix</a></li>
                        <li><a href="#">Branch</a></li>
                        <li><a href="#">Faculty</a></li>
                        <li><a href="#">Grade</a></li>
                        <li><a href="#">Course</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="header">
                <i class="fas fa-bars">
                </i>
                <div class="user-wrapper">
                    <img src="img/kie.png" alt="">
                    <div>
                        <h4>kie jukrit</h4>
                        <small>Super admin</small>
                    </div>
                </div>
            </div>
            <section>
                <h2>Branch</h2>
                <div class="tabContent">
                    <div class="tabBtn">
                        <span data-tab-target="#content1" class="active">Data</span>
                        <span data-tab-target="#content2">Add data</span>
                    </div>
                    <div id="content1" class="active" data-tab-content>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Branch</th>
                                <th>Manage</th>
                            </tr>
                            <?php 
                            $stmt = fetchDatabase($conn, "branch");
                            foreach($stmt as $row){
                        echo 
                            "<tr>
                                <td>$row[id_branch]</td>
                                <td>$row[branch]</td>
                                <td>
                                    <button class='editBtn'><i class='fas fa-edit'></i></button>
                                    <button class='delBtn'><i class='fas fa-trash-alt'></i></button>
                                </td>
                            </tr>";
                        };
                            ?>
                        </table>
                    </div>
                    <div id="content2" data-tab-content>
                        <form action="#">
                            <input type="text" class="miehod" placeholder="branch">
                            <div>
                                <button style="background: #108b04;" ><i class="fas fa-save"></i></button>
                                <button style="background: #f66f00;"><i class="fas fa-snowplow"></i></button>

                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>