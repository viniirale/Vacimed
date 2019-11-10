<div class="container grade-css">
    <h1>Produtos</h1>
    <hr>
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Número do produto</th>
                <th>Registro Origem</th>
                <th>Número do lote</th>
                <th>Quantidade</th>
                <th>Data de validade</th>
                <th>Data de registro</th>
                <th>Programa de saúde</th>
                <th>CNPJ distribuidor</th>
                <th>CNPJ fabricante</th>
                <th>Nota fiscal</th>
                <th>Valor unitário</th>
                <th>Entrada de estoque</th>
                <th><a href="?controller=ProdutosController&method=create" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($produtos) {
                foreach ($produtos as $produto) {
                    ?>
                    <tr>
                        <td><?php echo $produto->nuProduto; ?></td>
                        <td><?php echo $produto->coRegistroOrigem; ?></td>
                        <td><?php echo $produto->nuLote; ?></td>
                        <td><?php echo $produto->qtProduto; ?></td>
                        <td><?php echo $produto->dtValidade; ?></td>
                        <td><?php echo $produto->dtRegistro; ?></td>
                        <td><?php echo $produto->sgProgramaSaude; ?></td>
                        <td><?php echo $produto->nuCNPJDistribuidor; ?></td>
                        <td><?php echo $produto->nuCNPJFabricante; ?></td>
                        <td><?php echo $produto->nuNotaFiscal; ?></td>
                        <td><?php echo $produto->nuValorUnitario; ?></td>
                        <td><?php echo $produto->tpEntradaEstoque; ?></td>

                        <td>
                            <a href="?controller=ProdutosController&method=edit&id=<?php echo $produto->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ProdutosController&method=delete&id=<?php echo $produto->id; ?>" class="btn btn-danger btn-sm">Deletar</a>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                    ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>