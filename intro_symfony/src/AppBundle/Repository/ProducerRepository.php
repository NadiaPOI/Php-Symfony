<?php

namespace AppBundle\Repository;

/**
 * ProducerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProducerRepository extends \Doctrine\ORM\EntityRepository
{
  // nous ajouterons ici nos méthodes personnalisées de
  // récupération de données
  public function findAllOrderedByName()
  {
    // requête DQL (Doctrine Query Language = SQL + couche objet)
    return $this->getEntityManager()
      ->createQuery('SELECT p FROM AppBundle:Producer p ORDER BY p.name ASC')
      ->getResult();
  }

  public function findAllNotAssigned()
  {
    $query =
    ' SELECT p FROM AppBundle:Producer p
      WHERE NOT EXISTS (SELECT f FROM AppBundle:Fruit f WHERE p = f.producer)
      ORDER BY p.name ASC';
    return $this->getEntityManager()
      ->createQuery($query)
      ->getResult();
  }
}