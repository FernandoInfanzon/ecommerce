<?php

class ControladorPlantilla{


	/*=============================================
	=            Section LLAMAMOS A LA PLANTILLA            =
	=============================================*/

		public function plantilla(){

		include "vistas/plantilla.php";
	}

	/*=====  End of Section LLAMAMOS A LA PLANTILLA  ======*/
	
	/*=================================================================
	=            TRAEMOS ESTILOS DINAMICOS DE LA PLANTILLA            =
	=================================================================*/
	
		public function ctrEstiloPlantilla(){

			$tabla = "plantilla";
			$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
			return $respuesta;

		}
	
	/*=====  End of TRAEMOS ESTILOS DINAMICOS DE LA PLANTILLA  ======*/
	

	

}