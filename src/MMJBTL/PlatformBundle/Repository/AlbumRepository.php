<?php

namespace MMJBTL\PlatformBundle\Repository;

/**
 * AlbumRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AlbumRepository extends \Doctrine\ORM\EntityRepository
{


    public function getAlbumsByName() {
        $qb = $this->createQueryBuilder( 'a' );

        $qb->select( 'a.titreAlbum' )
        ->orderby( 'a.titreAlbum' );

        $listAlbumsByName = $qb
        ->getQuery()
        ->getResult()
        ;

        return $listAlbumsByName;
    }
}
