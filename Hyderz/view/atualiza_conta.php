<head>
<title>Hyderz | Alterar conta</title>
    <link rel="stylesheet" href= "../style.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="../img/icon.png">
</head>
<h1>Modificando dados da conta</h1>
<p> O id da sua conta é: <?=$conta['id']?><br> Lembrando que o id não é possível ser alterado!</p><br>
<form action="" method='post'>
    <input type="hidden" name='id' value='<?=$conta['id']?>'>
    <label>Nome:</label>
    <input type="text" name='nome' value='<?=$conta['nome']?>' required>
    <label>E-mail:</label>
    <input type="text" name='email' value='<?=$conta['email']?>' required>
    <label>Senha:</label>
    <input type="text" name='senha' value='<?=$conta['senha']?>' required><br>
    <button type="submit" name='atualiza'>
        Atualizar
    </button>
    <button type="submit" name='exclui'>
        Excluir
    </button>
</form>