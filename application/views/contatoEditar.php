<div class="container">
    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Editar contato</h2>
    <?php echo form_open('contato/atualizar'); ?>
    <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
    <label>Nome</label>
    <input class="form-control form-control-lg" name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
    <p></p>
    <label>e-mail</label>
    <input class="form-control form-control-lg" name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
    <p></p>
    <input class="btn btn-dark" type="submit" value="Salvar"/>
    <?php form_close(); ?>
    <a class="btn btn-dark" href="<?php echo base_url() . 'contato'; ?>">Cancelar</a>
</div>
