<?phP
    
    $conexao = mysqli_connect('localhost','webuser','php2','php2');
    if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }
?>