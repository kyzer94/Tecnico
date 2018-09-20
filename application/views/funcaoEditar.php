<!DOCTYPE html>

<div class="container">
<div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
        <?php
        // put your code here
        echo $acronico;
        echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Editar Função</h2>
        <?php echo form_open('funcao/atualizar'); ?>
        <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
        
        <div class="form-group">
        <label for="nomefuncao">Nome Função</label>
        <input class="form-control" id="nomefuncao" name="nomefuncao" type="nome" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
        </div>
                
        <input class="btn btn-success"  type="submit" value="Salvar"/>
        
        <?php form_close(); ?>
        <p></p>
        <a class="btn btn-primary" href="<?php echo base_url() . 'funcao'; ?>">Cancelar</a>
    </div>
    <div class="col-sm">
    </div>
</div>
</div>