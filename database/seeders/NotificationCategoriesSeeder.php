<?php

namespace Database\Seeders;

use App\Models\NotificationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Deportes'],
            ['name' => 'Finanzas'],
            ['name' => 'Películas'],
        ];

        NotificationCategory::insert($categories);
    }
}
