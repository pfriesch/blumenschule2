<?php

namespace Acme\BSCheckoutBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QuickbuttonRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class quickbuttonRepository extends EntityRepository
{

    public function getQuickbuttons($cashbox){

        $qb = $this->createQueryBuilder('c');
        $qb->where('c.cashbox = ?1');
        $qb->setParameter(1,$cashbox);
        $qb->addOrderBy('c.pos');

        return  $qb->getQuery()->getResult();

    }


}