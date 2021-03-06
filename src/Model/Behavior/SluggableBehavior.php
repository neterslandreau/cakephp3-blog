<?php
namespace App\Model\Behavior;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Text;

class SluggableBehavior extends Behavior
{
    protected $_defaultConfig = [
        'field' => 'title',
        'slug' => 'slug',
        'replacement' => '-',
    ];

    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function slug(Entity $entity)
    {
        $config = $this->config();
        $value = $entity->get($config['field']);
        $entity->set($config['slug'], strtolower(Text::slug($value, $config['replacement'])));
    }

    public function beforeSave(Event $event, EntityInterface $entity)
    {
        $this->slug($entity);
    }

}