<?php

namespace Adkomo\FrameworkBundle\Controller;

class IndexController
{

    public function __invoke()
    {
        $referenceName = "currencies";
        $value="USD";
        $reference = file_get_contents($_ENV["API_REFERENCE_URL"]."/".$referenceName.".jsonld?datajson.value=".$value);
        $reference = json_decode($reference, true);
        if($reference['hydra:totalItems'] == 1 ){
            dd($reference['hydra:member'][0]['id']);
            return $reference['hydra:member'][0]['id'];
        }
        return null;

    }


}
