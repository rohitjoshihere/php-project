<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup</title>
    <link rel="stylesheet" href="style1.css">
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
                <div id="top-left"><i class="ri-profile-line"></i>Setup/Students</div>
                <div id="top-right"><i class="ri-fullscreen-line"></i></div>
            </div>
            <div id="form-main">
            <h4>Student Admission Form</h4>
            <div id="form">
            <form action="code.php" method="POST">
                    <label for="name">Name<input type="text" name="name" id=""></label>
                    <label for="class">Class<input type="number" name="class" id=""></label>
                    <label for="roll">Roll No<input type="number" name="roll" id=""></label>
                    <label for="fname">Father's Name<input type="text" name="fname" id=""></label>
                    <label for="tname">Teacher's Name<input type="text" name="tname" id=""></label>
                    <input type="submit" name="saveUser" id="submit">
                </form>
            </div>
            </div>
        </div>
    </div>
    </div>




    <script src="script.js"></script>
</body>

</html>