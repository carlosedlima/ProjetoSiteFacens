<?php
    session_start();
    include_once 'classes/conexao.class.php';
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
                    <center>
                        
                        <input type="text" name="search" id="search" placeholder="Pesquisa" style="max-width: 75%;margin-bottom: 1%;">
                    </center>
                    <!-- <input type="text" name="search" id="search" placeholder="Pesquisa"> -->

                    <div class="flex-container" style="display: flex;">
                        <div class="flex-child content-to-hide" style="flex: 1; margin-left: 0.5%;">
                            <!-- <div style="display: flex; align-items: center;">
                                <i class="fas fa-search" style="display: inline-block;"></i>
                                <input type="text" class="" id="search" name="search" placeholder="" style="display: inline-block; margin-left:">
                            </div>

                            <div class="col-2 col-12-xsmall">
                                
                            </div> -->
                            <div class="">
                                <form id="" method="GET" action="">
                                    <br>
                                    <label>Especialidades:</label>
                                    <input type="checkbox" id="cachorro" name="cachorro" checked="">
                                    <label for="cachorro">Cachorro</label><br>
                                    <input type="checkbox" id="gato" name="gato" checked="">
                                    <label for="gato">Gato</label><br>
                                    <input type="checkbox" id="calopsita" name="calopsita" checked="">
                                    <label for="calopsita">Calopsita</label><br>
                                    <br>
                                    <label>Dias da semana:</label>
                                    <input type="checkbox" id="domingo" name="domingo" checked="">
                                    <label for="domingo">Domingo</label><br>
                                    <input type="checkbox" id="segunda" name="segunda" checked="">
                                    <label for="segunda">Segunda-Feira</label><br>
                                    <input type="checkbox" id="terca" name="terca" checked="">
                                    <label for="terca">Terça-Feira</label><br>
                                    <input type="checkbox" id="quarta" name="quarta" checked="">
                                    <label for="quarta">Quarta-Feira</label><br>
                                    <input type="checkbox" id="quinta" name="quinta" checked="">
                                    <label for="quinta">Quinta-Feira</label><br>
                                    <input type="checkbox" id="sexta" name="sexta" checked="">
                                    <label for="sexta">Sexta-Feira</label><br>
                                    <input type="checkbox" id="sabado" name="sabado" checked="">
                                    <label for="sabado">Sábado</label><br>
                                </form>
                            </div>
                        </div>
                        
                        <div class="flex-child" style="flex: 2;">
                        
                        <div>
                                <h4>Nome da Clínica</h4>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                <span class="image left"><img src="images/pic01.jpg"/></span>
                                <p style="text-align: justify;">Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam.</p>   
                                <div class="content-to-hide">
                                    <center><i class="button primary fas fa-greater-than fit small" onclick="buscar()"></i></center>
                                </div>
                                <div class="content-to-hideL">
                                    <center><i class="button primary fas fa-greater-than fit small" onclick="buscar()">></i></center>
                                </div>
                                
                            </div>
                            <hr>
                            <div>
                                <h4>Nome da Clínica 2</h4>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                <span class="image left"><img src="images/pic01.jpg"/></span>
                                <p style="text-align: justify;">Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam.</p>   
                                <div class="content-to-hide">
                                    <center><i class="button primary fas fa-greater-than fit small" onclick="buscar()"></i></center>
                                </div>
                                <div class="content-to-hideL">
                                    <center><i class="button primary fas fa-greater-than fit small" onclick="buscar()">></i></center>
                                </div>
                                
                            </div>  
                        </div>

                        <div class="flex-child content-to-hide" style="flex: 1.5;margin-left: 5%;padding-right: 1%;">
                            <div id="pesquisa" style="display: none;">
                                <i class="far fa-times-circle image right" onclick="sumir()" style="cursor: pointer;"></i>
                                <br>
                                <img src="images/pic01.jpg" class="image left" style="max-width: 50%; height: auto;"/>
                                <p style="text-align: justify;">Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam.</p>   
                                <p>Detalhes</p>
                                <p>Detalhes</p>
                                <p>Detalhes</p>
                                <p>Detalhes</p>
                            </div>
                        </div>
                    
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