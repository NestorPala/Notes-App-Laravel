<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createNote("Test Note 1", "Lorem Ipsum", false);
        $this->createNote("Test Note 2", "Hello React", true);
    }

    protected function createNote($title, $content, $is_archived) {
        Note::firstOrCreate([
            "title" => $title,
            "content" => $content,
            "is_archived" => $is_archived
        ]);
    }
}
