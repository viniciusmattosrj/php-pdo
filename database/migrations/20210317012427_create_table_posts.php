<?php

use Phinx\Migration\AbstractMigration;

class CreateTablePosts extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('posts');
        $table->addColumn('title', 'string', ['limit' => 50])
            ->addColumn('user', 'string', ['limit' => 11])
            ->addColumn('description', 'text')
            ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
