<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property string $description
 * @property string $street
 * @property string $surburb
 * @property string $state
 * @property int $postcode
 * @property string $country
 * @property string $phone_number
 *
 * @property \App\Model\Entity\User[] $users
 */
class Address extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'description' => true,
        'street' => true,
        'surburb' => true,
        'state' => true,
        'postcode' => true,
        'country' => true,
        'phone_number' => true,
        'users' => true,
    ];
}
