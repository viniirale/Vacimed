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
            
            <button id="btnFarmaciaForm" type="submit" class="btn btn-primary center btn-lg">Buscar</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>



</body>

</html>