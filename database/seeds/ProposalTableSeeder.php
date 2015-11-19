<?php

use Illuminate\Database\Seeder;
use EVA\Models\Proposal;
use EVA\Models\Vote;

class ProposalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proposals = array(
            ['meeting_id' => 1, 'user_id' => 1, 'content' => 'place1'],
            ['meeting_id' => 2, 'user_id' => 2, 'content' => 'place2'],
            ['meeting_id' => 3, 'user_id' => 3, 'content' => 'place3'],
            ['meeting_id' => 4, 'user_id' => 4, 'content' => 'place4'],
            ['meeting_id' => 5, 'user_id' => 5, 'content' => 'place5'],
        );

        foreach($proposals as $proposal) {
            $proposal = Proposal::create($proposal);
            $users = $proposal->meeting->participants;
            foreach($users as $user) {
                if($user->id == $proposal->user->id) {
                    Vote::create(['user_id' => $user->id, 'proposal_id' => $proposal->id, 'choice' => 'Agree', 'status' => true]);
                } else {
                    Vote::create(['user_id' => $user->id, 'proposal_id' => $proposal->id]);
                }

            }
        }
    }
}
