<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = Ticket::factory()->count(5)->create();

        $categories = Category::all();

        foreach ($tickets as $ticket) {
            $ticket->categories()->attach(
                $categories->random()->id
            );

            Message::factory()->count(15)->create([
                'ticket_id' => $ticket->id,
            ]);
        }
    }
}
