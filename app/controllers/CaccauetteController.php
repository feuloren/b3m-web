<?php

class CaccauetteController extends BaseController {

	public function inscriptionIndex()
	{
		return View::make('inscription_caccauette');
	}

    public function inscriptionCreate()
    {
        
        return Redirect::to('/caccauette/inscription');
    }
}