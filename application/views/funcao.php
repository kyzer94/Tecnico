
<div class="container">

    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Funcao</h2>
    <?php echo form_open('funcao/inserir'); ?>
    <div class="form-group">
        <label for="nomefuncao">Nome função:</label>
        <input class="form-control" id="nomefuncao" name="nomefuncao" type="text" required/>
    </div>

    <input class="btn btn-dark" type="submit" value="Salvar"/>
    <input class="btn btn-dark" type="reset" value="Limpar"/>
    <a class="btn btn-dark" href="<?php echo base_url() . 'home'; ?>">Voltar</a>
<?php form_close(); ?>


    <div>
        <table>
            <caption>Função</caption>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome Função</th>
                        <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($funcao == false): ?>
                        <tr><td>Nenhum função encontrado</td></tr>
                    <?php else: ?>
                        <?php foreach ($funcao as $row): ?>
                            <tr>
                                <td><?php echo $row->nomefuncao; ?></td>
                                <td>
                                    <a href="<?php
                                    echo base_url() .
                                    'funcao/editar/' . $row->idfuncao;
                                    ?>">Editar</a>
                                    |
                                    <a href="<?php
                                    echo base_url() .
                                    'funcao/excluir/' . $row->idfuncao;
                                    ?>">Excluir</a>
                                </td>
                            </tr>                  
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
    </div>

      

</div>