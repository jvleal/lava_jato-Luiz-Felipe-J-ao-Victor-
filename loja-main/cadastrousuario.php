<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <form action="cadusuario.php" method="POST">
            <div class="form-group">
                <label>Login</label>
                <input type="text" class="form-control" name="login" placeholder="Insira o login" required/>
                <br/>
                <label>Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Insira a senha" required/>
                <br/>
                <label>Selecione o tipo de usuário</label>
                <select name="tipo" class="form-control">
                    <option hidden selected>Clique para selecionar um tipo</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Normal">Normal</option>
                </select>
                <br/>
                <button type="submit" class="btn btn-outline-success">Inserir</button>
            </div>
        </form>
    </body>
</html>