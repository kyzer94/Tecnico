<div class="container">
    <div class="row">
        <div class="col-lg-3 col-xs-1 col-sm-1"></div>
        <div class="col-lg-6 col-xs-10 col-sm-10">
            <?php
            // put your code here
            
            echo "<br>";
//        echo $completo;
            echo "<p>";
            ?>
            <h2> Contato </h2>
            <br>
            <br>
            <?php echo form_open('contato/inserir'); ?>

            <label>Nome</label><br>
            <input class="form-control form-control-lg" name="nome" type="text" required/>
            <p></p>
            <label>E-mail</label><br>
            <input class="form-control form-control-lg" name="email" type="email" required/>
            <p></p>
            <input class="btn btn-dark" type="submit" value="Salvar"/>
            <input class="btn btn-dark" type="reset" value="Limpar"/>
            <a class="btn btn-dark" href="<?php echo base_url() . 'home'; ?>" >Voltar</a>
            <?php form_close(); ?>

            <p></p>
            <div>
                <table class="table">
                    <p>Contatos</p>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>e-mail</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($contatos == FALSE): ?>
                            <tr><td>Nenhum contato encontrado!</td></tr>
                        <?php else: ?>
                            <?php foreach ($contatos as $row): ?>
                                <tr>
                                    <td><?php echo $row->nome; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td>
                                        <a href="<?php
                                        echo base_url() .
                                        'contato/editar/' . $row->id;
                                        ?>">Editar</a>
                                        |
                                        <a href="<?php
                                        echo base_url() . ''
                                        . 'contato/excluir/' . $row->id;
                                        ?>">Excluir</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <br>
        </div>
        <div class="col-lg-3 col-xs-1 col-sm-1"></div>
    </div>
</div>