<?php

namespace Database\Seeders;

use App\Models\NotificationTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['type' => 'SMS'],
            ['type' => 'Email'],
            ['type' => 'Push Notification'],
        ];

        NotificationTypes::insert($types);
    }
}
