<?php

class onSolvemediacaptchaCaptchaValidate extends cmsAction {

    public function run($response){

        return $this->captcha_validate($response);

    }

}