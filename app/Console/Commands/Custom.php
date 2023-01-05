<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Faker\Factory;
use Illuminate\Console\Command;

class Custom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom commands';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $faker = Factory::create();

        foreach(range(1, 200) as $item) {
            Contact::create([
                'name' => $faker->name,
                'mail' => $faker->safeEmail,
                'phone' => $faker->tollFreePhoneNumber
            ]);
        }

        $this->info('Contatos adicionados');
    }
}
