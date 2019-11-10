<div class="container">
    <form class="needs-validation" action="?controller=ProdutosController&<?php echo isset($client->id) ? "method=refresh&id={$client->id}" : "method=save"; ?>" method="post">
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Produtos</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Número do produto:</label>
                <input type="text" class="form-control col-sm-8" name="nuProduto" id="nuProduto" value="<?php
                echo isset($produto->nuProduto) ? $produto->nuProduto : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Registro Origem:</label>
                <input type="text" class="form-control col-sm-8 " name="coRegistroOrigem" id="coRegistroOrigem" value="<?php
                echo isset($produto->coRegistroOrigem) ? $produto->coRegistroOrigem : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Número do lote:</label>
                <input type="text" class="form-control col-sm-8" name="nuLote" id="nuLote" value="<?php
                echo isset($produto->nuLote) ? $produto->nuLote : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Quantidade:</label>
                <input type="text" class="form-control col-sm-8 " name="qtProduto" id="qtProduto" value="<?php
                echo isset($produto->qtProduto) ? $produto->qtProduto : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Data de validade:</label>
                <input type="text" class="form-control col-sm-8 " name="dtValidade" id="dtValidade" value="<?php
                echo isset($produto->dtValidade) ? $produto->dtValidade : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Data de registro:</label>
                <input type="text" class="form-control col-sm-8 " name="dtRegistro" id="dtRegistro" value="<?php
                echo isset($produto->dtRegistro) ? $produto->dtRegistro : null;
                ?>" required>
            </div>
            
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Programa de saúde:</label>
                <input type="text" class="form-control col-sm-8 " name="sgProgramaSaude" id="sgProgramaSaude" value="<?php
                echo isset($produto->sgProgramaSaude) ? $produto->sgProgramaSaude : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">CNPJ distribuidor:</label>
                <input type="text" class="form-control col-sm-8 " name="nuCNPJDistribuidor" id="nuCNPJDistribuidor" value="<?php
                echo isset($produto->nuCNPJDistribuidor) ? $produto->nuCNPJDistribuidor : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">CNPJ fabricante:</label>
                <input type="text" class="form-control col-sm-8 " name="nuCNPJFabricante" id="nuCNPJFabricante" value="<?php
                echo isset($produto->nuCNPJFabricante) ? $produto->nuCNPJFabricante : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Nota fiscal:</label>
                <input type="text" class="form-control col-sm-8 " name="nuNotaFiscal" id="nuNotaFiscal" value="<?php
                echo isset($produto->nuNotaFiscal) ? $produto->nuNotaFiscal : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor unitário:</label>
                <input type="text" class="form-control col-sm-8 " name="nuValorUnitario" id="nuValorUnitario" value="<?php
                echo isset($produto->nuValorUnitario) ? $produto->nuValorUnitario : null;
                ?>" required>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Entrada de estoque:</label>
                <input type="text" class="form-control col-sm-8 " name="tpEntradaEstoque" id="tpEntradaEstoque" value="<?php
                echo isset($produto->tpEntradaEstoque) ? $produto->tpEntradaEstoque : null;
                ?>" required>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($produto->id) ? $produto->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-danger" href="?controller=ProdutosController&method=list">Cancelar</a>
            </div>
        </div>
    </form>
</div>