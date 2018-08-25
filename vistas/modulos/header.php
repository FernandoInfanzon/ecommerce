<?php 

	$servidor = Ruta::ctrRutaServidor();

 ?>



<!--=========================
=            TOP            =
==========================-->
<div class="container-fluid barraSuperior" id="top">

	<div class="container">
		<div class="row">
		
				<!--=====================================
				=            Section SOCIAL            =
				======================================-->
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">	
				
				<ul>
	<?php 

		$social = ControladorPlantilla::ctrEstiloPlantilla();

		$jsonRedesSociales = json_decode($social["redesSociales"],true);

		foreach ($jsonRedesSociales as $key => $value) {
			
			echo '<li>
						<a href="'.$value["url"].'" target="_blank">
							<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
						</a>
					</li>';

		}

		

	 ?>
				</ul>

			

		</div>	
		<!--====  End of Section SOCIAL  ====-->
		
			<!--==============================
			=            REGISTRO            =
			===============================-->
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				<ul>
					<li>
						<a href="#modalIngreso" data-toggle="modal">Log in</a>
					</li>
					<li>|</li>
					<li>
						<a href="#modalRegistro" data-toggle="modal">Sign In</a>
					</li>

				</ul>
			</div>
			<!--====  End of REGISTRO  ====-->
				

		
		</div>
	</div>
</div>

<!--====  End of TOP  ====-->

<!--============================
=            HEADER            =
=============================-->

<header class="container-fluid">
	<div class="container">
		<div class="row" id="header">
		
			<!--==============================
			=            LOGOTIPO            =
			===============================-->
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

				<a href="http://localhost/frontend">
					
					<img src="<?php echo $servidor.$social["logo"]; ?>" class="img-responsive" alt="Logo Adelphos">

				</a>
				

			</div>	
		
			
			<!--====  End of LOGOTIPO  ====-->

			<!--==================================================
			=            BLOQUE CATEGORIAS Y BUSCADOR            =
			===================================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
				
				<!--================================
				=            BOTON CATEGORIAS            =
				=================================-->
				
				
				<div class="col-lg-4 col-md-4  col-sm-4 col-xs-12 backColor" id="btnCategorias">
					<p>
						CATEGORIAS
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					</p>
				</div>
				
				<!--====  End of CATEGORIAS  ====-->
				
			
				
			
			<!--===============================
			=            BUSCADOR            =
			================================-->
			<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
				<input type="search" name="buscar" class="form-control" placeholder="Buscar...">
				<span class="input-group-btn">
					<a href="#">
						<button class="btn btn-default backColor" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</a>
					
				</span>
			</div>				
			<!--====  End of BUSCADOR  ====-->
			
		</div>
		<!--====  End of BLOQUE CATEGORIAS Y BUSCADOR  ====-->
		
		<!--=============================
			=            CARRITO DE COMPRAS           =
			==============================-->
				
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
				<a href="#">
					<button class="btn btn-default pull-left backColor">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</button>
				</a>
				<p>TU PEDIDO <span class="cantidadCesta"></span> <br> MXN $ <span class="sumaCesta"></span>
				</p>
			</div>

		</div>
			
			
			<!--====  End of CARRITO DE COMPRAS ====-->

			<!--================================
			=            Categorias            =
			=================================-->
			
			<div class="col-xs-12 backColor" id="categorias">

				<?php 

					$item = null;
					$valor = null;


					$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

					

					foreach ($categorias as $key => $value) {

					echo '<div class="col-lg-2 col-mx-3 col-sm-4 col-xs-12">
							<h4>
								<a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
							</h4>

							<hr>

							<ul>';

							$item = "id_categoria";

							$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

							foreach ($subcategorias as $key => $value) {
								echo '

								<li>
									<a href="'.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a>
								</li>';
							}

							echo '</ul>

						</div>';

					}
								
								
					
				 ?>

				
				
			</div>
			
			<!--====  End of Categorias  ====-->
			

	

	

	</div>
	
</header>


<!--====  End of HEADER  ====-->
