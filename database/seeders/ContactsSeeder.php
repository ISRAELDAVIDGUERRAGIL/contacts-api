<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacts;
use App\Models\User;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactsIds = User::pluck('id')->toArray();
        
        Contacts::factory()->count(20)->create([
            'user_id' => fn () => $contactsIds[array_rand($contactsIds)],
        ]);
        
    }
}