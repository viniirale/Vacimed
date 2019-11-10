<?php

require_once(SITE_ROOT.'app/model/Produto.php');

class ProdutosController extends Controller
{
 
    /**
     * Lista os Produtos
     */
    public function list()
    {
        $produtos = Produto::all();
        return $this->view('grade', ['produtos' => $produtos]);
    }
 
    /**
     * Mostrar formulario para criar um novo Produto
     */
    public function create()
    {
        return $this->view('form');
    }
 
    /**
     * Mostrar formulário para editar um Produto
     */
    public function edit($data)
    {
        $id      = (int) $data['id'];
        $produtos = Produto::find($id);
 
        return $this->view('form', ['produto' => $produtos]);
    }
 
    /**
     * Salvar o Produto submetido pelo formulário
     */
    public function save()
    {
        $produto           = new Produto;
        $produto->coRegistroOrigem = $this->request->coRegistroOrigem;
        $produto->nuProduto = $this->request->nuProduto;
        $produto->nuLote = $this->request->nuLote;
        $produto->qtProduto = $this->request->qtProduto;
        $produto->dtValidade = $this->request->dtValidade;
        $produto->dtRegistro = $this->request->dtRegistro;
        $produto->sgProgramaSaude = $this->request->sgProgramaSaude;
        $produto->nuCNPJFabricante = $this->request->nuCNPJFabricante;
        $produto->nuNotaFiscal = $this->request->nuNotaFiscal;
        $produto->nuValorUnitario = $this->request->nuValorUnitario;
        $produto->nuCNPJDistribuidor = $this->request->nuCNPJDistribuidor;
        $produto->tpEntradaEstoque = $this->request->tpEntradaEstoque;
        if ($produto->save()) {
            return $this->list();
        }
    }
 
    /**
     * Atualizar o produto conforme dados submetidos
     */
    public function refresh($data)
    {
        $id                = (int) $data['id'];
        $produto           = Produto::find($id);
        $produto->coRegistroOrigem = $this->request->coRegistroOrigem;
        $produto->nuProduto = $this->request->nuProduto;
        $produto->nuLote = $this->request->nuLote;
        $produto->qtProduto = $this->request->qtProduto;
        $produto->dtValidade = $this->request->dtValidade;
        $produto->dtRegistro = $this->request->dtRegistro;
        $produto->sgProgramaSaude = $this->request->sgProgramaSaude;
        $produto->nuCNPJFabricante = $this->request->nuCNPJFabricante;
        $produto->nuNotaFiscal = $this->request->nuNotaFiscal;
        $produto->nuValorUnitario = $this->request->nuValorUnitario;
        $produto->nuCNPJDistribuidor = $this->request->nuCNPJDistribuidor;
        $produto->tpEntradaEstoque = $this->request->tpEntradaEstoque;
        $produto->save();
 
        return $this->list();
    }
 
    /**
     * Apagar um produto conforme o id informado
     */
    public function delete($data)
    {
        $id      = (int) $data['id'];
        $produto = Produto::destroy($id);
        return $this->list();
    }
}