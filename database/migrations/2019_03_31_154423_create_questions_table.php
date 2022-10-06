<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('images', 100);
            
            $table->integer('number_of_views')->default(0);
            
            $table->integer('country_id')->default(1);
            $table->integer('region_id');
            $table->integer('raion_id');
            $table->integer('gorod_id')->nullable();
            
            $table->integer('get_item_pdd')->nullable();
            $table->integer('get_sub_item_pdd')->nullable();
            $table->integer('get_sing_pdd')->nullable();
            $table->integer('sing_pdd')->nullable();
            $table->integer('get_marking_pdd')->nullable();
            $table->integer('marking_pdd')->nullable();
            $table->integer('get_permission_pdd')->nullable();
            $table->integer('permission_pdd')->nullable();

            $table->text('description');
            $table->char('variant1', 200);
            $table->char('variant2', 200);
            $table->char('variant3', 200)->nullable();
            $table->char('variant4', 200)->nullable();
            $table->integer('answer');
            $table->integer('user_id');
            
            $table->string('last_login_ip')->nullable();
            $table->integer('checked')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('questions');
    }

}
