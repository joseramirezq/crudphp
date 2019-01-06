<?php
    include("db.php");

    if(isset($_POST['save_task'])){
        $name=$_POST['title'];
        $description=$_POST['description'];
        
        $query="INSERT INTO task(title, descripcion) VALUES ('$name','$description')";
        $result=mysqli_query($conn,$query);

        if(!$result){
            die("Query Faild");
         }
         $_SESSION['message']='Tarea guardada exitosamente';
         $_SESSION['message_type']='success';
         
        header("Location: index.php");
    }
?>
