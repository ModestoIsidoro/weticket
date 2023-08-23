<?php
if (!defined("FORBIDEN")) {
    header("Location: /");
}

if (isset($this->data['form'])) {
    extract($this->data['form']);
}
?>

<div class="modal position-relative d-block py-5" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">

                <h1 class="fw-bold mb-0 fs-2 title-section">Cadastre-se</h1>
                <a href="home" role="button" class="btn-close"></a>
            </div>

            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
            }
            ?>

            <div class="modal-body p-5 pt-0">
                <form method="POST" action="register">
                    <div class="conjuntoInputModal">
                        <label for="name">Nome</label>
                        <input type="text" class="entradaModal" placeholder="Nome completo" name="name" 
                        value="<?php if(isset($name)){ echo $name; }?>">
                    </div>

                    <div class="conjuntoInputModal">
                        <label for="email">Email</label>
                        <input type="email" class="entradaModal" placeholder="Email para conta" name="email"
                        value="<?php if(isset($email)){ echo $email; }?>">
                    </div>

                    <div class="conjuntoInputModal">
                        <label for="bi">Número de BI</label>
                        <input type="text" class="entradaModal" placeholder="Bilhete de Identidade" name="bi"
                        value="<?php if(isset($bi)){ echo $bi; }?>">
                    </div>

                    <div class="conjuntoInputModal">
                        <label for="phone">Telefone</label>
                        <input type="number" class="entradaModal" placeholder="Número de telefone" name="phone"
                        value="<?php if(isset($phone)){ echo $phone; }?>">
                    </div>

                    <div class="conjuntoInputModal">
                        <label for="">Password</label>
                        <input type="password" class="entradaModal" placeholder="Insira uma senha" name="password"
                        value="<?php if(isset($password)){ echo $password; }?>">
                    </div>

                    <div hidden class="conjuntoInputModal">
                        <label for="">Confirmar password</label>
                        <input type="password" class="entradaModal" placeholder="Repita a senha">
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Criar conta</button>
                </form>
                <a href="signin" rel="prev" class="signup text-muted">Ja tenho uma conta</a>.

                <hr class="my-2">
                <small class="text-muted termos">Ao clicar <span class="fw-bold">Criar conta</span> você
                    concorda com todos os <a href="#" class="termos">Termos e condições</a>.</small>
            </div>
        </div>
    </div>
</div>