<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-xs-1 col-sm-1"></div>
        <div class="col-lg-6 col-xs-10 col-sm-10">
            <h2> Contato </h2>
            <br>
            <br>
            <?php echo form_open('contato/inserir'); ?>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <h3>Nome:</h3>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control" name="nome" type="text" required/>
                </div>
                <div class="form-group col-md-4"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <h3>Valor:</h3>
                </div>
                <div class="form-group col-md-4">
                    <input class="form-control" name="valor" type="text" required/>
                </div>
                <div class="form-group col-md-2">
                    <select class="form-control" type="number" name="dia" value="">
                        <option value="1">X 01</option><option value="2">X 02</option><option value="3">X 03</option>
                        <option value="4">X 04</option><option value="5">X 05</option><option value="6">X 06</option>
                        <option value="7">X 07</option><option value="8">X 08</option><option value="9">X 09</option>
                        <option value="10">X 10</option><option value="11">X 11</option><option value="12">X 12</option>
                    </select>
                </div>
                <div class="form-group col-md-6"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <h3>Data:</h3>
                </div>
                <div class="form-group col-md-2">
                    <select class="form-control" type="number" name="dia" value="">
                        <option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option>
                        <option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option>
                        <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>
                        <option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
                        <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                        <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <select class="form-control" type="number" name="dia" value="">
                        <option value="1">01</option><option value="2">02</option><option value="3">03</option>
                        <option value="4">04</option><option value="5">05</option><option value="6">06</option>
                        <option value="7">07</option><option value="8">08</option><option value="9">09</option>
                        <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <select class="form-control" type="number" name="dia" value="">
                        <option value="18">2018</option><option value="19">2019</option><option value="20">2020</option>
                    </select>
                </div>
                <div class="form-group col-md-4"></div>   
            </div>


            <p></p>
            <input class="btn btn-dark" type="submit" value="Salvar"/>
            <input class="btn btn-dark" type="reset" value="Limpar"/>
            <a class="btn btn-dark" href="<?php echo base_url() . 'home'; ?>" >Voltar</a>
            <?php form_close(); ?>

            <p></p>
            <div>
                <table id="contatos" class="table table-striped table-bordered" style="width:100%">
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#contatos').DataTable({
            language: {
                "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            },
            iDisplayLength: 10,
            dom: 'Bfrtip',
            buttons: [
                'copy',
                'excel',
                'pdf',
                'print'
            ]
        });
    });</script>