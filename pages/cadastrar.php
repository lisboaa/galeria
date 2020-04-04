<?php require __DIR__ . '/header.php'; ?>
<div class="container">
    <h1>Cadastre-se</h1>
    <?php
    require __DIR__ . '/../class/Usuario.php';
    $usuario = new Usuario();
    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = $_POST['senha'];
        $telefone = addslashes($_POST['telefone']);

        if(!empty($nome) && !empty($email) && !empty($senha)) {
            $usuario->Cadastrar($nome, $email, $senha, $telefone);
        } else {
            ?>
            <div class="alert alert-warning">
                Preencha todos os campos
            </div>
            <?php
        }
    }
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="nome">E-mail:</label>
            <input type="text" name="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="nome">Senha:</label>
            <input type="text" name="senha" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="nome">Telefone:</label>
            <input type="text" name="telefone" class="form-control"/>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-default"/>
    </form>
</div>
<?php  require __DIR__ .'/footer.php';

