<?php
if (!defined("FORBIDEN")) {
    header("Location: /");
}

if(isset($this->data['form'])){
    extract($this->data['form']);
}
?>

<!-- Modal of Sign In -->
<div class="modal position-relative d-block py-5">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">

                <h1 class="fw-bold mb-0 fs-2 title-section">Faça o login</h1>
                <a href="home" role="button" class="btn-close"></a>

            </div>

            <div class="modal-body p-5 pt-0">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="login">
                    <div class="conjuntoInputModal">
                        <label for="email">Email</label>
                        <input type="email" class="entradaModal" name="email" placeholder="Email do usuário" value="<?php if(isset($email)){ echo $email;}?>">
                    </div>

                    <div class="conjuntoInputModal">
                        <label for="senha">Senha</label>
                        <input type="password" class="entradaModal" name="password" placeholder="Senha da conta" value="<?php if(isset($password)){ echo $password;}?>">
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Entrar</button>
                </form>

                <a href="#" class="text-muted forgoten">Esqueci a senha.</a>
                <hr class="my-2">
                <span class="text-muted signup">Não tenho conta, quero mi
                    <a href="signup" rel="next" class="signup">cadastrar</a>.
                </span>
            </div>
        </div>
    </div>
</div>