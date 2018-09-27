<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <h2>Editar Função</h2>
            <?php echo form_open('usuario/atualizar'); ?>
            <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $usuarioEditar[0]->idUsuario; ?>">

            <div class="form-group">
                <label for="nomeUsuario">Usuario:</label>
                <input class="form-control" id="nomeUsuario" name="nomeUsuario" type="text" required/>
                <label for="user">Login:</label>
                <input class="form-control" id="user" name="user" type="text" required/>
                <label for="senha">Senha:</label>
                <input class="form-control" id="senha" name="senha" type="password" required/>
                <label for="perfilAcesso">Tipo de Perfil:</label>
                <input class="form-control" id="perfilAcesso" name="perfilAcesso" type="text" required/>
            </div>

            <input class="btn btn-success"  type="submit" value="Salvar"/>

            <?php form_close(); ?>
            <p></p>
            <a class="btn btn-primary" href="<?php echo base_url() . 'usuario'; ?>">Cancelar</a>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>