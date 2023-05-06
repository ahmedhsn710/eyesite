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
            'author' => 'Khabir Ahmad',
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

        Article::create([
            'title' => 'Technology-enabled primary eye health care in Pakistan',
            'author' => 'Zahid Awan',
            'source' => 'https://rdcu.be/dbv2d',
            'published_on' => '2022-05-05',
            'body' => "Mobile technology helped to optimise primary eye health care in Chakwal district, Pakistan, thereby increasing access to specialist eye health for those who need it.
            In 2018, the Pakistan National Committee for Eye Health, together with CBM and Peek Vision, launched a technology-enabled primary eye care project to assess, monitor, and improve eye care services in Chakwal district.
            
            As previous studies in Pakistan have shown, referral pathways must be optimised in order to increase access to specialist eye health for patients. The CBM-Peek project aims to increase screening at primary health care level by including eye health promotion and awareness raising about available eye services in the community, thereby reducing pressure on secondary and tertiary eye care services.

            The project ensures that patients are connected to care using referral systems that link all levels of the eye health system (Figure 1). Real-time information about the whole programme is visible to the programme managers via the Peek Admin app, and the Peek Capture app is used at various stages to support visual acuity measurement, decision making, and to capture patient information.

            Programme structure
Community level

The project involves training Pakistan's lady health workers (community-based health care workers) in Chakwal district to do the following:

Create awareness in their catchment communities about the availability of eye care services at nearby facilities (known as 'sensitisation').
Identify and refer patients with eye conditions.
Follow patients up after referral or treatment.
Lady health workers are employed by the ministry of health, and each one is responsible for providing primary health care to approximately 1,000 people in their local or catchment community.

Primary level health care: basic health units

Basic health units each serve a population of around 10,000 people. Around 110 of Pakistan's lady health visitors (health centre-based workers) in Chakwal District were trained to carry out vision testing using the Peek Capture app. The app incorporates Peek's clinically validated visual acuity test to identify individuals with vision impairment, and it also includes specially adapted questionnaires that support the lady health visitors to identify people with other eye conditions and refer them. School health and nutrition supervisors who are trained to use the Peek Capture app were also deployed in schools throughout the Chakwal district to screen and refer children identified with eye conditions or visual impairment to primary health care facilities.

Primary level health care: rural health centres

Peek Capture is also used at rural health centres to screen walk-in patients. Optometrists see patients referred from the basic health units and any walk-in patients identified as needing eye care. The optometrists validate the visual acuity measured during screening (as a means of quality control), perform refraction, and prescribe spectacles to those who need them. They also conduct anterior and posterior chamber examinations and can refer patients to secondary or tertiary eye care services. Their actions, decisions, and referrals are recorded in the Peek Capture app."
        ]);
    }
}
