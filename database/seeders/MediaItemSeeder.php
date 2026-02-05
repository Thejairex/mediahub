<?php

namespace Database\Seeders;

use App\Models\MediaItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Frieren: Beyond Journey's End",
                'type' => "anime",
                'status' => "watching",
                'progress_current' => 14,
                'progress_total' => 28,
                'notes' => null,
                'source' => "ANIMEFLV",
                'source_url' => "https://www.animeflv.net/frieren-beyond-journeys-end",
                'image_url' => null,
                'user_id' => 1
            ],
            [
                'name' => "One Piece",
                'type' => "manga",
                'status' => "watching",
                'progress_current' => 1089,
                'progress_total' => null,
                'notes' => null,
                'source' => "TUMANGAONLINE",
                'source_url' => "https://www.tumangaonline.net/manga/one-piece",
                'image_url' => null,
                'user_id' => 1
            ],
            [
                'name' => "Attack on Titan: The Final Season",
                'type' => "anime",
                'status' => "on_hold",
                'progress_current' => 60,
                'progress_total' => 88,
                'notes' => null,
                'source' => "ANIMEFLV",
                'source_url' => "https://www.animeflv.net/frieren-beyond-journeys-end",
                'image_url' => null,
                'user_id' => 1
            ],
            [
                'name' => "Berserk",
                'type' => "manga",
                'status' => "plan_to_watch",
                'progress_current' => 0,
                'progress_total' => 364,
                'notes' => null,
                'source' => "ANIMEFLV",
                'source_url' => "https://www.animeflv.net/frieren-beyond-journeys-end",
                'image_url' => null,
                'user_id' => 1
            ],
            [
                'name' => "Frieren: Beyond Journey's End",
                'type' => "novel",
                'status' => "watching",
                'progress_current' => 14,
                'progress_total' => 28,
                'notes' => null,
                'source' => "ANIMEFLV",
                'source_url' => "https://www.animeflv.net/frieren-beyond-journeys-end",
                'image_url' => null,
                'user_id' => 1
            ],
        ];

        MediaItems::insert($data);

    }
}
