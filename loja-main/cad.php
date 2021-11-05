<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $placa_carro = $_POST['placa_carro'];
    $celular = $_POST['celular'];
    $cidade = $_POST['cidade'];
    $data_nascimento = $_POST['data_nascimento'];
    $sql= "INSERT INTO pessoas(nome,placa_carro,celular,cidade,data_nascimento) VALUES ('$nome','$placa_carro','$celular','$cidade','$data_nascimento')";
    if(mysqli_query($conn,$sql)){
        echo "<script language='javascript' type='text/javascript'> 
          alert('Registro inserido com sucesso!');
          window.location.href='loja.php';
          </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'> 
          alert('Não foi possível inserir este registro!');
          window.location.href='loja.php'
          </script>";
    }
    mysqli_close($conn);
?>