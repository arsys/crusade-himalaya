<?php

use Illuminate\Database\Seeder;
use App\TourCategory;
use App\Difficulty;
use App\Region;
use App\Accommodation;
use App\Meal;
use App\Group;
use App\Included;
use App\Excluded;
use App\Event;
use App\UploadImage;
use App\Member;
use App\Team;
class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               $faker = Faker\Factory::create();
    	// $levels = array('Easy', 'Moderate','Difficult','Strenuous','Alpine');
    	// foreach ($levels as $level) {
    	// 	$difficulty = new Difficulty;
    	// 	$difficulty->create([
    	// 		'name'=> $level]);
    	// }
    	// $group = new Group;
    	// $group->name = "Min.2-16 Max";
    	// $group->save();
    	
    	$regions =  array('Everest Region','Annapurna Region', 'Manaslu Region', 'Langtang Region','Mustang Region', 'Off Beaten Path' );
    	foreach ($regions as $region) {
    		$name = new Region;
    		$name->name = $region;
            $name->nav = $faker->imageUrl(200, 200, 'people');
    		$name->slug = str_slug($region, '-');
    		$name->save();
    	}

        $categories = array('Trekking','Climbing', 'Heli Tour', 'Weekend Tour', 'Ski', 'Adventure Sport');
        foreach ($categories as $category) {
            $name = new TourCategory;
            $name->thumb= $faker->imageUrl(200, 200, 'people');
            $name->path = $faker->imageUrl(200, 200, 'people');
            $name->nav = $faker->imageUrl(200, 200, 'people');
            $name->name = $category;
            $name->save();
        }
        // $faker = Faker\Factory::create();
        // for ($i = 1; $i <= 5; $i++) {

        //     $included = new Included;
        //     $included->name =$faker->sentence($nbWords = 6, $variableNbWords = true);
        //     $included->save();

        //     $excluded = new Excluded;
        //     $excluded->name =$faker->sentence($nbWords = 6, $variableNbWords = true);
        //     $excluded->save();
        // }
        // $data = [
        //     ['title'=>'Demo Event-1', 'start_date'=>'2019-01-11', 'end_date'=>'2019-01-12'],
        //     ['title'=>'Demo Event-2', 'start_date'=>'2019-01-11', 'end_date'=>'2019-01-13'],
        //     ['title'=>'Demo Event-3', 'start_date'=>'2019-01-14', 'end_date'=>'2019-01-14'],
        //     ['title'=>'Demo Event-3', 'start_date'=>'2019-01-17', 'end_date'=>'2017-09-17'],
        // ];
        // foreach ($data as $key => $value) {
        //     Event::create($value);
        // }
        // $regions = Region::all();
        // foreach ($regions as $region) {
        //     $UploadImage = new UploadImage;
        //     $loc = $UploadImage->uploadSingle("uploads/images/region/nav/",$region->path,225,150);
        //     $new = new Region;
        //     $new -> nav = loc;
        //     $new->save();
        // }

        //         // }
        // $categories = TourCategory::all();
        // foreach ($categories as $category) {
        //     $UploadImage = new UploadImage;
        //     $loc = $UploadImage->uploadSingle("uploads/images/tour-category/nav/",$category->path,225,150);
        //     $new = new TourCategory;
        //     $new -> nav = loc;
        //     $new->save();
        // }

        // $members = array('Administration','Trekking Guide', 'Climbing Guide', 'Porter', 'Agent' , 'Others');
        // foreach ($members as $member) {
        //     $new = new Member;
        //     $new->name = $member;
        //     $new->save();
        // }

        // $faker = Faker\Factory::create();
        // for ($i=1; $i <= 12 ; $i++) { 
        //     $new = new Team;
        //     $new->name = $faker->name;
        //     $new->position = $faker->jobTitle;
        //     $new->member_id = $faker->numberBetween($min = 1, $max = 6);
        //     $new->description = $faker->paragraph($nbSentences = $faker->numberBetween($min = 4, $max = 6) , $variableNbSentences = true);
        //     $new->avatar = $faker->imageUrl(200, 200, 'people');
        //     $new->save();
        // }
    }
}
