<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticlesIcon Entity
 *
 * @property string $id
 * @property string $article_id
 * @property string $icon_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Article $article
 * @property \App\Model\Entity\Icon $icon
 */
class ArticlesIcon extends Entity
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
        '*' => true,
        'id' => false
    ];
}
