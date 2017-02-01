<?php
require_once 'solvemedialib.php';
class solvemediacaptcha extends cmsFrontend
{
    protected $useOptions = true;
    public function actionIndex()
    {
        cmsCore::error404();
    }
    
    public function get_capcha()
    {
         echo solvemedia_get_html($this->options['c-key']);
    }
    
    public function captcha_validate($response)
    {
        $solvemedia_response = solvemedia_check_answer($this->options['v-key'],
					$_SERVER['REMOTE_ADDR'],
					$response->get('adcopy_challenge'),
					$response->get('adcopy_response'),
					$this->options['h-key']);
        if (!$solvemedia_response->is_valid) {
            return false;
        }
        else {
            return true;
        }
    }
}