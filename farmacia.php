<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <div class="container font-roboto">
        <h3 class="text-center bold marginTop">BUSCA DE FARMÁCIAS</h3>
        <p class="text-center">Preencha pelo menos um dos dados</p>
        <form class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputFarmacia">Nome da Farmácia</label>
                <input type="text" class="form-control" id="inputNomeFarmacia">

            </div>
            <div class="form-group col-md-4">
                <label for="exampleregistro">Cidade</label>
                <input type="text" class="form-control" id="inputCidade">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEstado">Bairro</label>
                <input type="text" class="form-control" id="InputBairro">
            </div>

            <button onclick='showFarmacia()' id="btnFarmaciaForm" type="button" class="btn btn-primary center btn-lg">Buscar</button>

        </form>
    </div>

    <div id="showFarmacias" class="container font-roboto" hidden>
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