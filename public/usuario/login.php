<link rel="stylesheet" href="/projeto/assets/css/login.css">


<form action="/projeto/usuario/logado" method="post">



    <div class="form-container">

        <h2 class="title-card">Login</h2>
        <label>Email:</label>

        <input class="text-box" placeholder="Digite o seu e-mail" type="text" name="email"
            value="<?= (isset($parametro[0]["email"])) ? $parametro[0]["email"] : "" ?>" />
        <br />

        <label>Senha:</label>
        <input class="text-box" placeholder="Digite sua senha" id="senha" type="password" name="senha"
            value="<?= (isset($parametro[0]["senha"])) ? $parametro[0]["senha"] : "" ?>" />
        <button class="button-view" type="button" onclick="mostrarSenha()">👁️</button>
        <script>
        function mostrarSenha() {
            const campo = document.getElementById("senha");
            if (campo.type === "password") {
                campo.type = "text";
            } else {
                campo.type = "password";
            }
        }
        </script>

        <br />
        <a class="forget" href="#">Esqueceu a senha?</a>
        <div class="button-card">

            <input class="button-enviar" type="submit" value="Enviar">
            <a class="button-cadastrar" href="/projeto/usuario/formulario">Cadastrar</a>
        </div>
    </div>

</form>