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
class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$levels = array('Easy', 'Moderate','Difficult','Strenuous','Alpine');
    	foreach ($levels as $level) {
    		$difficulty = new Difficulty;
    		$difficulty->create([
    			'name'=> $level]);
    	}
    	$group = new Group;
    	$group->name = "Min.2-16 Max";
    	$group->save();
    	
    	$regions =  array('Everest Region','Annapurna Region', 'Manaslu Region', 'Langtang Region','Mustang Region', 'Off Beaten Path' );
    	foreach ($regions as $region) {
    		$name = new Region;
    		$name->name = $region;
    		$name->slug = str_slug($region, '-');
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
        $data = [
            ['title'=>'Demo Event-1', 'start_date'=>'2019-01-11', 'end_date'=>'2019-01-12'],
            ['title'=>'Demo Event-2', 'start_date'=>'2019-01-11', 'end_date'=>'2019-01-13'],
            ['title'=>'Demo Event-3', 'start_date'=>'2019-01-14', 'end_date'=>'2019-01-14'],
            ['title'=>'Demo Event-3', 'start_date'=>'2019-01-17', 'end_date'=>'2017-09-17'],
        ];
        foreach ($data as $key => $value) {
            Event::create($value);
        }
    }
}