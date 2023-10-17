<?php

namespace Database\Seeders;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{

    public function run(): void
    {
        $sessions = [
            'Morning',
            'Afternoon',
            'Evening',
        ];

        foreach ($sessions as $session) {
            Session::create([
                'name' => $session,
            ]);
        }
    }
}
