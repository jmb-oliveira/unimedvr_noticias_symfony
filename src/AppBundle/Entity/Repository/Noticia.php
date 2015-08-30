<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Noticia
 */
class Noticia extends EntityRepository
{

	function getNoticias($search)
	{
		$query = $this->createQueryBuilder('t1')
    				->where('t1.removed_on IS NULL');

    	if($search != 'todas'){
    		$query->andWhere($query->expr()->like('t1.titulo', '?1'))
    			->setParameter(1, "%$search%");
    	}

		$query->orderBy('t1.publicada_em', 'DESC')
    		->getQuery();

    	return $query;
	}
}
