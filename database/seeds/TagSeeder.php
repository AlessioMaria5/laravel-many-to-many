<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myData = ['contemporaneo','rock','attualita','metal'];

        foreach($myData as $data){

            $new = new Tag();
            $new->title = $data;
            $new->save();
        }

    }
}
