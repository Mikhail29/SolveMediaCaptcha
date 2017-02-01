<?php

class backendSolvemediacaptcha extends cmsBackend{

    public $useDefaultOptionsAction = true;
    public function actionIndex()
    {
        $this->redirectToAction('options');
    }

}