<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserType;
use App\MenuType;
use App\Menu;
use App\Table;
use App\TableType;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        UserType::create([
            'name' => 'admin'
        ]);

        UserType::create([
            'name' => 'employee'
        ]);

        User::create([
            'name' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'admin',
            'tel' => 'Admin',
            'user_type_id' => '1',
            'password' => bcrypt('password'),
        ]);

        MenuType::create([
            'name' => 'ผัด'
        ]);

        MenuType::create([
            'name' => 'ต้ม'
        ]);

        MenuType::create([
            'name' => 'ทอด'
        ]);

        MenuType::create([
            'name' => 'อาหารชุด'
        ]);

        MenuType::create([
            'name' => 'เครื่องดื่ม'
        ]);

        Menu::create([
            'name' => 'ปลานิลทอด',
            'img' => 'http://saveabandonedbabies.org/wp-content/uploads/2015/08/default-300x169.png',
            'price' => '300',
            'menu_type_id' => '3',
            'user_id' => '1',
        ]);

        Menu::create([
            'name' => 'ต้มยำปลา',
            'img' => 'http://saveabandonedbabies.org/wp-content/uploads/2015/08/default-300x169.png',
            'price' => '450',
            'menu_type_id' => '2',
            'user_id' => '1',
        ]);

        Menu::create([
            'name' => 'ผัดเม็ดมะม่วง',
            'img' => 'http://saveabandonedbabies.org/wp-content/uploads/2015/08/default-300x169.png',
            'price' => '250',
            'menu_type_id' => '1',
            'user_id' => '1',
        ]);

        Menu::create([
            'name' => 'ชุดอาหารทะเล',
            'img' => 'http://saveabandonedbabies.org/wp-content/uploads/2015/08/default-300x169.png',
            'price' => '2500',
            'menu_type_id' => '4',
            'user_id' => '1',
        ]);

        TableType::create([
            'name' => 'ธรรมดา'
        ]);

        TableType::create([
            'name' => 'ห้องจัดเลี้ยง'
        ]);

        Table::create([
            'name' => 'ฮวดใช้',
            'seat' => 20,
            'table_type_id' => 2,
            'user_id' => 1
        ]);

        Table::create([
            'name' => 'A1',
            'seat' => 20,
            'table_type_id' => 1,
            'user_id' => 1
        ]);

        Table::create([
            'name' => 'A2',
            'seat' => 20,
            'table_type_id' => 1,
            'user_id' => 1
        ]);
    }
}
