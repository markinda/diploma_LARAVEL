<?php

use App\Category;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'login' => 'admin',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('admin'),
            'isAdmin' => true,
        ]);
        Category::create([
           'name' => 'Средства для мытья общего назначения',

        ]);
        Category::create([
            'name' => 'Составы для кухни',

        ]);
        Category::create([
            'name' => 'Товары для мытья посуды',

        ]);
        Category::create([
            'name' => 'Дезинфицирующая продукция для ванны и туалета',

        ]);
        Category::create([
            'name' => 'Средства для очистки стекол и зеркал',

        ]);
        Category::create([
            'name' => 'Составы для мытья полов',

        ]);
        Category::create([
            'name' => 'Товары для чистки текстильных поверхностей',

        ]);
        Category::create([
            'name' => 'Средства для стирки',

        ]);
        Category::create([
            'name' => 'Продукция от насекомых',

        ]);
    }
}
