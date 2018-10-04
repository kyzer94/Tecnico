
<div class="container">
    <h2>Usuario</h2>
    <?php echo form_open('usuario/inserir'); ?>
    <div class="form-group">
        <label for="nomeUsuario">Usuario:</label>
        <input class="form-control" id="nomeUsuario" name="nomeUsuario" type="text" required/>
        <label for="user">Login:</label>
        <input class="form-control" id="user" name="user" type="text" required/>
        <label for="senha">Senha:</label>
        <input class="form-control" id="senha" name="senha" type="password" placeholder="Minimo 8 caracteres" minlength="8" required/>
        <label for="perfilAcesso">Tipo de Perfil:</label>
        <select class="form-control" id="perfilAcesso" type="text" name="perfilAcesso" value="">
            <option value="ADM">Admin</option>
            <option value="Comum">Comum</option>
        </select>
    </div>
    <input class="btn btn-dark" type="submit" value="Salvar"/>
    <input class="btn btn-dark" type="reset" value="Limpar"/>
    <a class="btn btn-dark" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
    <?php form_close(); ?>
    <div>
        <table>
            <caption>Usuario</caption>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome Usuarios</th>
                        <th scope="col">Usuarios</th>
                        <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($usuario == false): ?>
                        <tr><td>Nenhum função encontrado</td></tr>
                    <?php else: ?>
                        <?php foreach ($usuario as $row): ?>
                            <tr>
                                <td><?php echo $row->nomeUsuario; ?></td>
                                <td><?php echo $row->user; ?></td>
                                <td>
                                    <a href="<?php
                                    echo base_url() .
                                    'usuario/editar/' . $row->idUser;
                                    ?>">Editar</a>
                                    |
                                    <a href="<?php
                                    echo base_url() .
                                    'usuario/excluir/' . $row->idUser;
                                    ?>">Excluir</a>
                                </td>
                            </tr>                  
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
    </div>
</div>

