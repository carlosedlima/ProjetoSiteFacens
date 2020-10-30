<?php
    session_start();
    include_once '../classes/conexao.class.php';
	$conectar = new conexao;
	$conn = $conectar->getConexao();
?>

<!DOCTYPE HTML>
<html>
    <?php
        $root = $_SERVER['DOCUMENT_ROOT'];
        $arquivo = $root."/ProjetoSiteFacens/PetHelper/";
        include_once($arquivo."elements/head.html");
	?>
	<body class="landing is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header" class="">
            <?php
                include_once($arquivo."elements/menu.php");
            ?>

            <!-- Page Wrapper -->
            <section class="wrapper style5">
                
                <section id="two" class="wrapper alt style5" style="margin-left: 1%;">
                    <p><h3>Solicitações a serem aceitas:</h3></p>
                    <div class="table-wrapper">
                        <table class="alt">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>CNPJ</th>
                                    <th>Descrição</th>
                                    <th>Animais D.</th>
                                    <th>Animais S.</th>
                                    <th>Endereço</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                            </thead>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th><button class="button" onclick="">Aceitar</button></th>
                            </tr>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th><button class="button" onclick="">Aceitar</button></th>
                            </tr>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th>Country</th>
                                <th><button class="button" onclick="">Aceitar</button></th>
                            </tr>
                        </table>
                    </div>
                </section>
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