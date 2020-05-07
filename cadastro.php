<html>
    <head>
        <title>Cadastro de Usuario</title>
    </head>
    <body>        
        <?php
            $host = "localhost";
            $user = "root";
            $banco = "cadastrobocamaria";
            $conexao = mysql_connect($host, $user);
                       mysql_select_db($banco); 
        ?>
        <?php                
            $email=$_POST['email'];
            $sql = mysql_query("INSERT INTO usuarios(email)
            VALUES('email')");
        ?>
    </body>
</html>