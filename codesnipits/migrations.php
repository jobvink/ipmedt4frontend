<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 1-6-2017
 * Time: 12:59
 */


Schema::create('dokter', function (Blueprint $table) {
    $table->increments('id');
    $table->string('naam');
    $table->string('email')->unique();
    $table->string('password');
    $table->string('functie');
});


Schema::create('cunsult', function (Blueprint $table){
    $table->increments('id');
    $table->string('consultant');
    $table->string('type');
    $table->date('date');
    $table->text('beschrijving');
});

Schema::create('patient', function (Blueprint $table){
    $table->increments('id');
    $table->string('naam');
    $table->date('geboortedatum');
    $table->string('adres');
    $table->string('email')->unique();
    $table->string('password');
});

Schema::create('afspraak', function (Blueprint $table){
    $table->increments('id');
    $table->string('titel');
    $table->date('date');
    $table->string('lokatie');
    $table->text('beschrijving');
});

Schema::create('dokter_patient', function (Blueprint $table) {
    $table->integer('id');
    $table->integer('dokter_id');
    $table->integer('patient_id');
});

Schema::create('consult_dokter', function (Blueprint $table) {
    $table->integer('id');
    $table->integer('dokter_id');
    $table->integer('consult_id');
});

Schema::create('consult_patient', function (Blueprint $table) {
    $table->integer('id');
    $table->integer('consult_id');
    $table->integer('patient_id');
});

Schema::create('afspraak_dokter', function (Blueprint $table) {
    $table->integer('id');
    $table->integer('afspraak_id');
    $table->integer('dokter_id');
});

Schema::create('afspraak_patient', function (Blueprint $table) {
    $table->integer('id');
    $table->integer('afspraak_id');
    $table->integer('dokter_id');
});