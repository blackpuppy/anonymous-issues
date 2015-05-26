<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Issue Entity.
 */
class Issue extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'text' => true,
        'comments' => true,
    ];
}
