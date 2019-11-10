<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <h1>BUSCA DE MEDICAMENTOS</h1>
    <P>Preencha pelo menos um dos dados</P>


    <form class="font-roboto row">
                <div class="form-group col-md-6">
                    <label for="exampleInputFarmacia">Farmacia</label>
                    <input type="text" class="form-control" id="exampleInputFarmacia">
              
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleregistro">Registro Farmacia</label>
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
                <button type="submit" class="btn btn-primary center btn-lg">Buscar</button>
            </form>
            
    <?php include 'footer.php'; ?>



</body>

</html>