<?php include("conn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personal Information System</title>
</head>

<body>
    <section>
        <div class="form">
            <form action="#" method="post">
                <div>
                <label class="logo">Student Information</lable>
                </div><br> 
                <div>
                    <label class="invalue" for="Name"  id="Name"  >Name</label>
                    <input type="text" name="Name">
                </div> <br> 
                <div>
                    <label class="invalue" for="Department" id="Department" >Department</label>
                    <input type="text" name="Department">
                </div><br> 
                <div>
                    <label class="invalue" for="Branch" id="Branch" >Branch</label>
                    <input type="text" name="Branch">
                </div><br>
                <div>
                    <label class="invalue" for="Year" id="Year">Year</label>
                    <input type="text"  name="Year">
                </div><br> 
                <div>
                    <label class="invalue" for="ClassRollNo" id="ClassRollNo" >ClassRollNo</label>
                    <input type="text" name="ClassRollNo">
                </div><br> 
                <div>
                    <label class="invalue" for="UniversityRollN" id="UniversityRollN" >UniversityRollNo</label>
                    <input type="text" name="UniversityRollNo">
                </div><br> 
                
                <div>
                    <label  class="invalue"for="Address" id="Address" >Address</label>
                    <input type="text" name="Address">
                </div><br> 
                <div >
                    <input class="btn" type="submit" name="submit"></input><br><br><br>
                </div>
        </div>
    </section>
    <!-- <script>
        function saved(){
            alert("Information saved")
        }
        function update(){
            alert("Information Updated")
        }
        function deletef(){
            alert("Information deleted")
        }
    </script>
-->
    
</body>
</html>

<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 if(isset($_POST['submit'])){
    $Name = $_POST['Name'];
    $Department = $_POST['Department'];
    $Branch = $_POST['Branch'];
    $Year = $_POST['Year'];
    $Class_RollNo = $_POST['ClassRollNo'];
    $University_RollNo = $_POST['UniversityRollNo'];
    $Address = $_POST['Address']; 

    echo $name;


    $sql = "INSERT INTO information VALUES ('$Name', '$Department', '$Branch', '$Year', '$Class_RollNo ', '$University_RollNo', '$Address')";
    
    //  VALUES ('Prgya', 'cde', 'dd', '2', '34 ', '34', 'vdsf')";
    $result = mysqli_query($conn, $sql);
 
        if($result){
          echo " Your entry has been submitted successfully!";
        }
        else{
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        } 
    }
?>