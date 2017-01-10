<?php
use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'user_id' => '6e68cecc-b9a9-463c-bcf5-83fae4b73847',
                'title' => 'The title',
                'body' => 'This is the article body.',
                'created' => '2016-12-09 17:53:55',
                'modified' => '2016-12-09 17:53:55',
            ],
            [
                'id' => '2',
                'user_id' => '6e68cecc-b9a9-463c-bcf5-83fae4b73847',
                'title' => 'A title once again',
                'body' => 'And the article body follows.',
                'created' => '2016-12-09 17:53:59',
                'modified' => '2016-12-09 17:53:59',
            ],
            [
                'id' => '3',
                'user_id' => '6e68cecc-b9a9-463c-bcf5-83fae4b73847',
                'title' => 'Title strikes back',
                'body' => 'This is really exciting! Not.',
                'created' => '2016-12-09 17:54:03',
                'modified' => '2016-12-09 17:54:03',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
