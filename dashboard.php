<?php require 'config/function.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- cdn for icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- cdn for google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div id="main">
        <div id="banner"><i class="ri-menu-line"></i>
        <?php include_once('sidebar.php');?>
        </div>
        <div id="right">
            <div id="top">
                <div id="top-left"><i class="ri-dashboard-line"></i>Dashboards</div>
                <div id="top-right"><i class="ri-fullscreen-line"></i></div>
            </div>
            <div id="record">
                <h4>Available Records</h4>
                <div id="record-row">
                    <div class="record-box">
                        <div class="record-box-top">
                            Total Students
                        </div>
                        <div class="record-box-bottom">
                            <?php echo getCount("student");?>
                        </div>
                    </div>
                    <div class="record-box">
                        <div class="record-box-top">
                            Total Employee
                        </div>
                        <div class="record-box-bottom">
                        <?php echo getCount("student");?>
                        </div>
                    </div>
                    <div class="record-box">
                        <div class="record-box-top">
                            Fee Paid
                        </div>
                        <div class="record-box-bottom">
                        <?php echo getCount("student");?>
                        </div>
                    </div>
                    <div class="record-box">
                        <div class="record-box-top">
                            Student Passed
                        </div>
                        <div class="record-box-bottom">
                        <?php echo getCount("student");?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="search">
                <h4>Quick Search</h4>
                <div id="search-data">
                    <h5><i class="ri-arrow-down-s-line"></i> Search Student</h5>
                    <form action="" id="search-form">
                        <input type="text" name="name" id="name" placeholder="Search by Student Name">
                        <input type="text" name="name" id="name" placeholder="Search Class">
                        <input type="text" name="name" id="name" placeholder="Search by Roll Number">
                        <button type="submit">Search</button>
                    </form>
                    <div id="student-table">
                    <table>
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Roll No.</th>
        <th>Father's Name</th>
        <th>Teacher's Name</th>
    </tr>
    <?php 
        $users = getAll('student');
       if(mysqli_num_rows($users) > 0)
       {
        foreach($users as $userItem){
            ?>
            <tr>
                <td><?=$userItem['name'];?></td>
                <td><?=$userItem['class'];?></td>
                <td><?=$userItem['roll'];?></td>
                <td><?=$userItem['fname'];?></td>
                <td><?=$userItem['tname'];?></td>
    </tr>
            <?php
        }
       }
       else
       {
        ?>
        <tr>
            <td >No record found</td>
        </tr>
        <?php
       }
    ?>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="script.js"></script>
</body>

</html>