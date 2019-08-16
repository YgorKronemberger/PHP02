<?php 
    
    $nome = $_POST["nome"];
   $email = $_POST["email"];
    $estadocivil = $_POST['estadocivil'];
    $sexo = $_POST["sexo"];
    $senha = _POST["senha"];
    
    
        
  
        
    echo $nome . "<br>";
    echo $email . "<br>";
    echo $estadocivil . "<br>";
    echo $sexo . "<br>";
    echo $senha;
        
    
        
        // echo "<meta http-equiv='refresh' content='0;url=http://localhost/PHP02/cadastrar.php' />";
        
        $con = mysql_connect('localhost', 'root', ' ', 'well');
        
        $inserir = "INSER INTO cadastro VALUES (null, sha1({$senha}), '{$nome}', '{$email}', '{$estadocivil}', '{$sexo}')";
            
        
        mysql_query($inserir, $con);
        
        
        if(mysql_query($inserir, $con)){
            
            echo "<script>alert('realizado com sucesso')</script>";
        }
        else{
            
             echo "<script>alert('Erro, tente novamente')</script>";
        }

    

    
    
?>