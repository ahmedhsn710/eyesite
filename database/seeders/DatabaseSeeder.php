<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Article::create([
            'title' => 'Perceptions of eye health in schools in Pakistan',
            'source' => 'https://rdcu.be/dbv2d',
            'published_on' => '2006-03-02',
            'body' => "Background
            Research exploring children's and their teachers' perceptions of eye health is lacking. This paper reports for the first time on perceptions of primary schoolchildren and their teachers of healthy and diseased eyes, things that keep eyes healthy and damage them, and what actions to be taken in case of an eye injury.
            
            Methods
            Using draw and write technique, 160 boys and girls (9-12 years old) attending four primary schools in Abbottabad district, northern Pakistan, were invited to draw pictures in response to a set of semi-structured questions and then label them. Sixteen teachers who were currently teaching the selected students were interviewed one-on-one.
            
            Results
            Analysis of text accompanying 800 drawings and of the interview scripts revealed that most children and teachers perceived healthy eyes to be those which could see well, and diseased eyes to be those which have redness, watering, dirty discharge, pain, and itching; or those which have 'weak eyesight' and blindness. Among things that students and teachers thought damage the eyes included sun, television, and sharp pointed objects, particularly pencils. Teachers noted that children with eye problems 'have difficulty seeing the blackboard well', 'screw up their eyes', and 'hold their books too close'.
            
            Conclusion
            We conclude that schoolchildren and their teachers had a good knowledge of eye health, but many of them had serious misconceptions e.g., use of kohl, medicines and eye drops keeps eyes healthy. Kohl is an important source of lead and can reduce children's intelligence even at low blood levels. Health education in schools must take into account children's existing knowledge of and misconceptions about various aspects of eye health. Such steps if taken could improve the relevance of eye health education to schoolchildren."
        ]);
    }
}
