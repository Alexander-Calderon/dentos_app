<?php

class BasicPage extends TPage
{
	public function onPreInit($param)
	{
		parent::onPreInit($param);
		$this->Theme=$this->Application->Parameters['ThemeName'];
	}

	public function gotoDefaultPage()
	{
		$this->Response->redirect($this->Service->constructUrl($this->Service->DefaultPage));
	}

	public function gotoPage($pagePath, $getParameters=null)
	{
		$this->Response->redirect($this->Service->constructUrl($pagePath,$getParameters));
	}
}
