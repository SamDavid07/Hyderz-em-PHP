<head>
    <title>Hyderz | Excluir conta</title>
    <link rel="stylesheet" href= "../style.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="../img/icon.png">
</head>
<h1>Excluindo conta <?=$conta['id']?></h1>
    <form action="" method= 'get'>
    Tem certeza que deseja excluir a conta de id <?=$conta['id']?>, de nome <?=$conta['nome']?>
    e com o e-mail <?=$conta['email']?>?<br><br>
        <button type="submit" value="<?=$conta['id']?>" name= 'sim'>
            Sim, eu quero.
        </button>
        <button type="submit" name= 'nao'>
            Não, não quero isso.
        </button>
    </form>