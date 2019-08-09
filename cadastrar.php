<!DOCTYPE html>

<body>
   <?php include 'header.php' ?>
   
   
<div class="row">
   <div class="col-md-4"></div>
    <form id="Cad" class="col-md-4" action="">
        
            <div class="form-group">
        <h3 class="text-center">Cadastrar</h3>
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nome" placeholder="Digie seu nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" type="email" id="email" placeholder="Digite Email">
            </div>
            
            <div class="form-group">
                <label for="EC">Estado Civil</label>
                <select id="EC" name="Esado Civil">
                    <option value="" disabled>--Escolha--</option>
                    <option value="">Solteiro</option>
                    <option value="">Casado</option>
                    <option value="">Divorciado</option>
                    <option value="">Viuvo</option>



                </select>
            </div>
            <div class="form-group">
                <label>Sexo:</label>
                <label for="Masc">Masculino</label>
                <input id="masc" type="radio">
                <label for="Fem">Feminino</label>
                <input id="Fem" type="Radio">
            </div>
        
        
    </form>
    <div class="col-md-4"></div>
</div>
</body>
