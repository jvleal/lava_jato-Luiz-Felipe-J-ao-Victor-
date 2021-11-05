<?php 
    include 'conecta.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    $query = $conn->query("SELECT * FROM usuario WHERE login='$login'");
    if(mysqli_num_rows($query)>0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário já existe na base de dados!');
        window.location.href='usuario.php'
        </script>";
        exit();
    }
    else {
    $sql= "INSERT INTO usuario(login,senha,tipo) VALUES ('$login','$senha','$tipo')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Registro inserido com sucesso!');
          window.location.href='usuario.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='usuario.php'
          </script>";
    }
}
    mysqli_close($conn);
?>