<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nom");
            $table->string("prenom");
            $table->dateTime("date");
            $table->integer("age");
            $table->string("profession");
            $table->string("email")->unique();
            $table->string("num1");
            $table->string("num2");
            $table->string("adresse");
            $table->char("sexe", 1);
            $table->char("groupes", 2);
            $table->char("etat", 1);
            $table->string("note");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
