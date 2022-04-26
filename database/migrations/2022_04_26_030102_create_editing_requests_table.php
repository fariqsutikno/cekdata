<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editing_requests', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('arabicName')->nullable();
            $table->string('birthPlace')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('class10')->nullable();
            $table->string('class11')->nullable();
            $table->string('class12')->nullable();
            $table->string('room10')->nullable();
            $table->string('room11')->nullable();
            $table->string('room12')->nullable();
            $table->string('SDName')->nullable();
            $table->string('SDYear')->nullable();
            $table->string('SMPName')->nullable();
            $table->string('SMPYear')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nism');
            $table->string('nik')->nullable();
            $table->text('address')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('village')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('fatherName')->nullable();
            $table->string('fatherPhone')->nullable();
            $table->string('fatherStatus')->nullable();
            $table->string('fatherJob')->nullable();
            $table->string('motherName')->nullable();
            $table->string('motherPhone')->nullable();
            $table->string('motherStatus')->nullable();
            $table->string('motherJob')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('khidmahPlace')->nullable();
            $table->string('furtherStudy')->nullable();
            $table->string('fileDriveLink')->nullable();
            $table->string('photoLink')->nullable();
            $table->string('myPhone')->nullable();
            $table->string('shEmail')->nullable();
            $table->string('myEmail')->nullable();
            $table->string('requestStatus')->default('waiting');
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
        Schema::dropIfExists('editing_requests');
    }
};
