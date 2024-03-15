<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;


class ContactsTableSeeder extends Seeder
{
    public function run(): void
    {
        Contact::factory()->count(7)->create();
    }


}
