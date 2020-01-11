<?php

use Illuminate\Database\Seeder;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::refresh();
        $root = Bouncer::role()->firstOrCreate([
            'name' => 'root',
            'title' => 'Super Administrator',
        ]);

        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $subscriber = Bouncer::role()->firstOrCreate([
            'name' => 'subscriber',
            'title' => 'Subscriber',
        ]);

        Bouncer::assign('root')->to(1);
    }
}
