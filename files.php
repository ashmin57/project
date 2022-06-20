
<form action="" method="post" enctype="mutipart/form-data">
    <input type="file" name="image">
    <input type="submit">
</form>
<?php
    if(isset($_FILES['image'])){  
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }
?>