<?php

use Phinx\Migration\AbstractMigration;

class InsertUsersFake extends AbstractMigration
{
    public function up()
    {
        $rows = [
            [
                'id'    => 1,
                'name'  => 'Zico',
                'email' => 'zico@gmail.com',
                'password' => '123'
            ],
            [
                'id'    => 2,
                'name'  => 'Gabigol',
                'email' => 'gabigol@gmail.com',
                'password' => '456'
            ]
        ];

        $this->table('users')->insert($rows)->save();
    }

    public function down()
    {
        $this->execute('DELETE FROM users');
    }
}
