<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->integer('difficulty_id')->after('featured')->unsigned(); //
            $table->integer('group_id')->after('difficulty_id')->unsigned(); //
            $table->integer('category_id')->unsigned()->after('group_id'); //            
            $table->integer('region_id')->after('category_id')->unsigned()->nullable(); //
            $table->integer('accommodation_id')->after('region_id')->unsigned(); //
            $table->integer('meal_id')->after('accommodation_id')->unsigned(); //
            $table->integer('rating_count')->after('meal_id')->nullable(); //
            $table->float('rating_cache')->after('rating_count')->nullable(); //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('difficulty_id');
            $table->dropColumn('group_id');
            $table->dropColumn('category_id');
            $table->dropColumn('region_id');
            $table->dropColumn('accommodation_id');
            $table->dropColumn('meal_id');
            $table->dropColumn('rating_count');
            $table->dropColumn('rating_cache');
        });
    }
}
