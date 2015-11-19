<?php

use Illuminate\Database\Seeder;
use EVA\Models\Meeting;

class MeetingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meetings = array(
            ['owner' => ['user_id' => 1], 'participants' => [2, 3, 4]],
            ['owner' => ['user_id' => 2], 'participants' => [1, 3, 4, 5]],
            ['owner' => ['user_id' => 3], 'participants' => [2, 4]],
            ['owner' => ['user_id' => 4], 'participants' => [1, 2, 3, 5]],
            ['owner' => ['user_id' => 5], 'participants' => [2]],
        );
        foreach ($meetings as $meeting) {
            $participants = $meeting['participants'];
            $meeting = Meeting::create($meeting['owner']);
            $meeting->participants()->attach($meeting->owner->id);
            $meeting->participants()->attach($participants);
            $meeting->save();
        }
    }
}
