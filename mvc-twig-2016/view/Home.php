<?php

/**
 * Description of SimpleResourceList
 *
 * @author fede
 */


class Home extends TwigView {
    
    public function show() {
        
        echo self::getTwig()->render('home.html.twig');
        
        
    }
    
}
