<?php
use Migrations\AbstractMigration;

class CreateArticles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('articles', ['id' => false, 'primary_key' => ['id']]);
        $table
            ->addColumn('id', 'uuid', [
                'null' => false
            ])
            ->addColumn('user_id', 'uuid', [
                'null' => false
            ])
            ->addColumn('category_id', 'uuid', [
                'null' => false
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255
            ])
            ->addColumn('body', 'text')
            ->addColumn('created', 'datetime', [
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => false,
            ])
            ->create();
    }
}
