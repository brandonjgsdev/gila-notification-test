<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserNotificationCategory;
use App\Models\UserNotificationType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(NotificationCategoriesSeeder::class);
        $this->call(NotificationTypesSeeder::class);

        User::factory(10)->create();

        // UserNotificationCategory::factory(10)->create();
        // UserNotificationType::factory(10)->create();

    }
}
