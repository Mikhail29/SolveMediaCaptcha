<?php

Class formSolvemediacaptchaOptions extends cmsForm {

    public function init() {

        return array(
            array(
                'type' => 'fieldset',
                'childs' => array(

                    new fieldString('c-key', array(
                        'title' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_PUB_KEY
                    )),
                    new fieldString('v-key', array(
                        'title' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_PRIV_KEY
                    )),
                    new fieldString('h-key', array(
                        'title' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_H_KEY
                    )),
                    new fieldList('theme', array(
                        'title' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_THEME,
                        'items' => array(
                            'black' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_THEME_BLACK,
                            'white' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_THEME_WHITE,
                            'purple' => LANG_SOLVEMEDIACAPTCHA_OPTIONS_THEME_PURPLE,
                            'red'    => LANG_SOLVEMEDIACAPTCHA_OPTIONS_THEME_RED
                        )
                    ))
                )
            ),

        );

    }

}