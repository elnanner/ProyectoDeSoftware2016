<?php

/**
 * Description of SimpleResourceList
 *
 * @author fede
 */

class SimpleResourceList extends TwigView {
    
    public function show($resourceArray) {
        
        echo self::getTwig()->render('listResources.html.twig', array('resources' => $resourceArray));
        
        
    }
    
}
