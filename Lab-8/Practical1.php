<!DOCTYPE html>
<html lang="en">
<body>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="file" ><br>
        <input type="submit" name="select">
    </form>
    <?php
        if(isset($_FILES['file'])){
            echo "<pre>";
            print_r($_FILES['file']);
            echo "</pre>";
            $file_name=$_FILES["file"]["name"];
            echo $file_name."<br>";
            $file_type=$_FILES["file"]["type"];
            echo $file_type."<br>";
            $file_tmp_name=$_FILES["file"]["tmp_name"];
            echo $file_tmp_name."<br>";
            $file_size=$_FILES["file"]["size"];
            echo $file_size."<br>";

            $path="server_upload_files/".$file_name;
            if(move_uploaded_file($file_tmp_name,$path)){
                echo "file is uploaded";
            }
            else{
                echo "please select file";
            }
        }
        
    ?>
</body>
</html>