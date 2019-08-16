<!DOCTYPE html>

<body>
   <?php include 'header.php' ?>
   
   
<div class="row">
   <div class="col-md-4"></div>
    <form id="Geral" action="gravar.php" method="post" id="Cad" class="col-md-4 form-group">
        
            
        <h3 class="text-center">Cadastrar</h3>
                <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" class="form-control" type="text" id="nome" placeholder="Digie seu nome">
                </div>
          
               <div class="form-group">
                <label for="email">E-mail</label>
                <input name="email" class="form-control" type="email" id="email" placeholder="Digite Email">
                </div>
                
                <div class="form-group">
                <label for="senha">Senha</label>
                <input name="senha" class="form-control" type="password" id="senha" placeholder="Digite a senha">
                </div>
            
                <div class="form-group">
                <label for="EC">Estado Civil</label>
                <select id="EC" name="estadocivil">
                
                    <option value="escolha" selected="selected" disabled="disabled">--Escolha--</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viuvo</option>
                    
                </select>
                </div>
            
               
                   <div class="form-group">
                <label>Sexo:</label>
                
                <input value="M" name="sexo" id="masc" type="radio">
                <label for="Masc">Masculino</label>
               
                <input id="Fem" value="F" name="sexo" type="Radio">
                <label for="Fem">Feminino</label>
                
                
                <input name="botao" class="btn btn-dark ml-4" type="submit">
                </div>
          
        
        
    </form>
    <div class="col-md-4"></div>
</div>
</body>
