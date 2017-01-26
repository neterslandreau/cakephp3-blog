<?php
use Migrations\AbstractMigration;

class AddSugToUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('slug', 'string', [
            'null' => false,
            'default' => null,
            'limit' => 255
        ]);
        $table->update();
    }
}
