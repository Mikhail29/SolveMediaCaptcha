<?php

class onSolvemediacaptchaCaptchaHtml extends cmsAction {

    public function run(){

        return cmsTemplate::getInstance()->renderInternal($this, 'capcha');

    }

}