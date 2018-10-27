<?php

namespace AppBundle\Interfaces;

/**
 *
 * @author Matías Jiménez matei249@gmail.com <matjimdi at atechnologies>
 */
interface DataFixtureInterface
{    
    /**
     * Traducción del fixture
     */
    public function getNameTrans();
    
    /**
     * Nombre del fixture
     */
    public function getAlias();
    
}
