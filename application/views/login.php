<div class="container">
    <h2>Login</h2>
    <?php echo form_open('login/autenticar'); ?>
    <div class="form-group">
        <label for="user">Usuario:</label>
        <input class="form-control" id="user" name="user" type="text" required/>
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input class="form-control" id="senha" name="senha" type="password" required/>
    </div>

    <input class="btn btn-dark" type="submit" value="Entrar"/>
    <input class="btn btn-dark" type="reset" value="Limpar"/>
    <?php form_close(); ?>
</div>