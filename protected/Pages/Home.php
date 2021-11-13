<?php

class Home extends BasicPage
{
	public function onLoad($param)
	{
		parent::onLoad($param);

		if(!$this->getIsPostBack())
		{
			
			$publicaciones = AR_TPublicaciones::finder()->findAll();

			echo "<pre>";
			var_dump($publicaciones);
			echo "</pre>";

			$listado_publico = array();
			foreach($publicaciones as $publicacion){
				$listado_publicotmp['publica_titulo'] = $publicacion->publica_titulo;
				$listado_publicotmp['publica_descripcion'] = $publicacion->publica_descripcion;
				$listado_publicotmp['publica_fechacreacion'] = $publicacion->publica_fechacreacion;

				$listado_publico[] = $listado_publicotmp;

				// $this->publica_titulo->Text = $publicacion->publica_titulo;
				// $this->publica_descripcion->Text = $publicacion->publica_descripcion;
				// $this->publica_fechacreacion->Text = $publicacion->publica_fechacreacion;
				

			}
			$this->RptListadoPublico->DataSource = $listado_publico;
			$this->RptListadoPublico->dataBind();
			
		}
	}


	public function buscarPorFecha($sender, $param){

		if(strlen(trim($this->search_by_date->Text !== '') ) ){
			$ResultSetByFecha = AR_TPublicaciones::finder()->findAll(' publica_fechacreacion = :fecha ', array('fecha' => date('Y-m-d', strtotime($this->search_by_date->Text))) );
			//var_dump($ResultSetByFecha);

			$data_filtrada = array();
			foreach($ResultSetByFecha as $data)
				$data_filtrada[] = (array)$data;
			$this->RptListadoPublico->DataSource = $data_filtrada;
			$this->RptListadoPublico->dataBind();
		}


		//$this->Page->IsValid;
		//$this->setIsValid(false);

		
		$fecha = DateTime::createFromFormat('Y-m-d', $this->search_by_date->Text); //Valida si puede convertir a fecha, si sí, entonces devuelve su objeto DateTime sino false.
		if( $fecha === false ){
			$param->IsValid = false;
		}

		
		
	}














}
