<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>
    <div class="container font-roboto">
        <h3 class="text-center bold marginTop">BUSCA DE MEDICAMENTOS</h3>
        <p class="text-center">Preencha pelo menos um dos dados</p>
        <form class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputFarmacia">Nome do Medicamento</label>
                <input type="text" class="form-control" id="exampleInputFarmacia">

            </div>
            <div class="form-group col-md-6">
                <label for="exampleregistro">Número de Registro do Medicamento</label>
                <input type="text" class="form-control" id="exampleinputRegistro">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEstado">Estado(UF)</label>
                <input type="text" class="form-control" id="exampleInputEstado">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputRua">Sua Rua</label>
                <input type="text" class="form-control" id="exampleInputRua">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputCidade">Cidade</label>
                <input type="text" class="form-control" id="exampleInputCidade">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEndereco">Numero de Endereço</label>
                <input type="text" class="form-control" id="exampleInputEndereco">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputBairro">Bairro</label>
                <input type="text" class="form-control" id="exampleInputBairro">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputCep">Seu Cep</label>
                <input type="text" class="form-control" id="exampleInputCep">
            </div>
            <button onclick='showMedicamento()' id="btnMedicamentosForm" type="button" class="btn btn-primary center btn-lg">Buscar</button>
        </form>
    </div>

    <div id="showMedicamentos" class="container font-roboto" hidden>
        <h3 class=" bold marginTop">Farmácias Populares</h3>
        <table class="table">
            <thead class="farmacia-bar">
                <tr>
                    <th scope="col">Farmácia</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Medicamento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <tr class="farmacia-background-color2">
                    <td>Fármacia Popular Cristo Redentor</td>
                    <td>R. São Manoel, 543, (51) 3359-8685 </td>
                    <td>Paracetamol 75g, cartela c/8 comprimidos</td>
                    <td>200</td>
                    <td>R$ 0,00</td>
                </tr>
                <tr class="farmacia-background-color1">
                    <td>Fármacia Popular Cristo Redentor</td>
                    <td>Rua Cândido Benz, 233, (51)3206-2360 </td>
                    <td>Paracetamol 75g, cartela c/8 comprimidos</td>
                    <td>25</td>
                    <td>R$ 12,00</td>
                </tr>
            </tbody>
        </table>

        <h3 class=" bold marginTop">Farmácias Particulares</h3>
        <table class="table">
            <thead class="farmacia-bar">
                <tr>
                    <th scope="col">Farmácia</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Medicamento</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Comprar</th>
                </tr>
            </thead>
            <tbody>
                <tr class="farmacia-background-color1">
                    <td>Panvel Farmácias</td>
                    <td>Av. Cristóvão Colombo, 545, (51) 3018-7223 </td>
                    <td>Paracetamol 75g, cartela c/8 comprimidos</td>
                    <td>100</td>
                    <td>R$ 15,00</td>
                    <td><button onclick='btnComprar()' type="button" class="btn btn-success">Clique Aqui para Comprar</button></td>
                </tr>
                <tr class="farmacia-background-color2">
                    <td>Farmácias São João</td>
                    <td>R. 24 de Outubro, 676, (51)3206-2360 </td>
                    <td>Paracetamol 75g, cartela c/8 comprimidos</td>
                    <td>98</td>
                    <td>R$ 14,00</td>
                    <td><button onclick='btnComprar()' type="button" class="btn btn-success">Clique Aqui para Comprar</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?>



</body>

</html>