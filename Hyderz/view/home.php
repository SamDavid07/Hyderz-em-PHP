<head>
    <title>Hyd | Loja de roupa</title>
    <link rel="stylesheet" href= "../style.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="../img/icon.png">
</head>
<img src="../img/header.jpg">
<form action="" method='post'>
    <h3>Dados necessários</h3>
    <label>Nome:</label>
    <input type="text" name= 'nome' required><br>
    <label>E-mail:</label>
    <input type="text" name= 'email' required><br>
    <label>Senha:<br>(min. 6; max. 8 caractéres! conter letra(s))</label>
    <input type="text" name= 'senha' required><br>
    <button type="submit" name= 'novo'>Criar nova conta</button>
    <button type="reset" name='reset'> Limpar dados</button>
</form>
<br>
<br>
<br>
<br>
<h3 id="user">Users hydercais></h3>
<?php if(isset($listaContas)) : ?>
    <?php foreach($listaContas as $c) : ?>
        <p>
             <a href="?id=<?=$c['id']?>">
                <?= $c['nome']?><br>
            </a>
                <?= $c['email']?><br><br>
        </p>
        <br>
    <?php endforeach ?>
<?php else : ?>
    <p> Nenhuma conta encontrada </p>
<?php endif ?>
