<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->id = 1;
        $admin->name = 'Admin';
        $admin->description = 'Administrates ChangeWindows';
        $admin->save();
        
        $editor = new Role();
        $editor->id = 2;
        $editor->name = 'Editor';
        $editor->description = 'Users with editing permissions';
        $editor->save();
    
        $platinum = new Role();
        $platinum->id = 10;
        $platinum->name = 'Platinum Insider';
        $platinum->description = 'Insiders who contribute to and test ChangeWindows';
        $platinum->save();
    
        $gold = new Role();
        $gold->id = 11;
        $gold->name = 'Gold Insider';
        $gold->description = 'Insiders who contribute to and test ChangeWindows';
        $gold->save();
    
        $silver = new Role();
        $silver->id = 12;
        $silver->name = 'Silver Insider';
        $silver->description = 'Insiders who contribute to ChangeWindows';
        $silver->save();
    
        $bronze = new Role();
        $bronze->id = 13;
        $bronze->name = 'Bronze Insider';
        $bronze->description = 'Insiders who contribute to ChangeWindows';
        $bronze->save();
    
        $user = new Role();
        $user->id = 20;
        $user->name = 'User';
        $user->description = 'User with a user account';
        $user->save();
    }
}
