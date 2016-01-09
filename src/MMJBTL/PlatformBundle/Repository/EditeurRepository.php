<?php

namespace MMJBTL\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EditeurRepository extends EntityRepository
{
	    public function getEditeurs() {
        $qb = $this->createQueryBuilder( 'e' );

        $qb->select( 'e' )
        ->orderby( 'e.nomEditeur' );

        $listEditeurs = $qb
        ->getQuery()
        ->getResult()
        ;

        return $listEditeurs;
    }
}