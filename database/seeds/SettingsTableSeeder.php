<?php

use Illuminate\Database\Seeder;
use App\Settings;

class SettingsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $settings = [
            [
                'description' => 'Комментирование',
                'title' => 'comment',
            ],
            [
                'description' => 'Добавление вопросов',
                'title' => 'question',
            ],
            [
                'description' => 'Техподдержка',
                'title' => 'support',
            ],
            [
                'description' => 'Регистрация пользователей',
                'title' => 'register',
            ],
            [
                'description' => 'Восстановление пароля',
                'title' => 'password_reset',
            ],
            [
                'description' => 'Добавление в закладки',
                'title' => 'add_bookmark',
            ],
            [
                'description' => 'Работа сайта',
                'title' => 'disable_site',
            ],
        ];

        Settings::insert($settings);
    }

}
