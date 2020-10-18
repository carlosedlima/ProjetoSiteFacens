<?php
    session_start();
    include_once 'classes/conexao.class.php';
	$conectar = new conexao;
	$conn = $conectar->getConexao();
    
    $erro = false;
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	
	if((!empty($email)) AND (!empty($senha)) AND (isset($_POST['humano']))){
		$result_clinica = "SELECT cli_id, cli_nome, cli_senha FROM clinicas WHERE cli_email='$email' LIMIT 1";
		$resultado_clinica = mysqli_query($conn, $result_clinica);
        $row_clinica = mysqli_fetch_assoc($resultado_clinica);
        
		if($resultado_clinica && (isset($row_clinica['cli_id']))){
			if(password_verify($senha, $row_clinica['cli_senha'])){
				$_SESSION['id'] = $row_usuario['cli_id'];
				$_SESSION['nome'] = $row_usuario['cli_nome'];
				$_SESSION['email'] = $row_usuario['cli_email'];
				header("Location: logado.php");
			}else{
                $erro = true;
				$msg = "Login ou senha incorreto!";
			}
		}else{
        $erro = true;
		$msg = "Login ou senha incorreto!";
		}
	}

	mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];
        $arquivo = $root."/PetHelper/";
        include_once($arquivo."elements/head.html");
	?>
	<body class="landing is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header" class="">
            <?php
                include_once($arquivo."elements/menu.html");
            ?>

            <!-- Page Wrapper -->
                <section class="wrapper style5">
                    <div class="inner">
                    <br><br><br>
                        <h4>Login</h4>
                        <form method="POST" action="php/logar.php">
                            <div class="row gtr-uniform">
                                <div class="col-12">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <input type="password" name="senha" id="senha" placeholder="Senha" />
                                </div>
                                <div class="col-12">
                                    <input type="checkbox" id="demo-human" name="humano" checked>
                                    <label for="demo-human">Não sou um robô</label>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Entrar" name="submit" class="primary" /></li>
                                        <li><input type="reset" value="Resetar" /></li>
                                    </ul>
                                    <?php
                                        if($erro == true){
                                            echo "<span style='font-size:16px; color:#ff0000;'>*".$msg."</span>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

                <!-- Footer -->
                <?php
                    include_once($arquivo."elements/footer.html");
                ?>
			
        

		<!-- Scripts -->
			<?php
				include_once($arquivo."elements/scripts.html");
			?>

	</body>
</html>