<?php
include "header.php";
?>
<div class="main-content">
    <h2>Update Student Record</h2>
    <?php
    $id = $_GET["id"];
    include "config.php";
    $sql = "SELECT * FROM student WHERE sid = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Failed!");
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
    <div class="main-content">
    <form action="savedata.php" class="post-form" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
            <input type="text" name="sname" name="sid" value="<?php echo $row['sname']; ?>"/>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
        </div>
        <div class="form-group">
            <label for="">Class</label>
           
                <?php
                include "config.php";
                $sql1 = "Select * from studentclass";
                $result1 = mysqli_query($conn, $sql1) or die("Query failed!");
                if(mysqli_num_rows($result1)>0){
                    echo '<select name="class" id="">
                    ';
                    while($row1 = mysqli_fetch_assoc($result1)){
                        if($row["sclass"]==$row1["cid"]){
                            $select = "selected";
                        }else{
                            $select = "";
                        }
                            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
        
                        
                    echo "</select>";
                }
                ?>
           
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text"  name="sphone" value="<?php echo $row['sphone']; ?>"/>
        </div>
        <input type="Submit" class="submit" value="Save"
        >
    </form>
</div>
            <?php
             
        }
    }else{
        echo "No record Found!";
    }
?>
   