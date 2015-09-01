<?php

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Categoria
 */
class Categoria extends EntityRepository
{
	function getCategorias()
	{
		return $this->createQueryBuilder('t1')
					->where('t1.removed_on IS NULL')
					->orderBy('t1.dcategoria')
					->getQuery();
	}
}
