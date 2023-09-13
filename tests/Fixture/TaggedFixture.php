<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TaggedFixture
 */
class TaggedFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'tagged';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'table_alias' => 'Lorem ipsum dolor sit amet',
                'foreign_key' => 1,
                'tag_id' => 1,
                'created' => 1694588311,
                'modified' => 1694588311,
            ],
        ];
        parent::init();
    }
}
