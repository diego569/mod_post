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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id()->autoIncrement();
            //codigo sede filial
            //tipo proceso
            $table->char('proceso_admision', 7);         
            $table->char('numero_convocatoria', 7);  
            //tipo documento       
            $table->string('nro_doc')->unique();
            $table->string('nombres');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('apellido_casada')->nullable();
            $table->boolean('solo_un_apellido');
            $table->char('sexo', 2);
            $table->date('fecha_nacimiento');
            // $table->string('pais_nacimiento');
            // $table->string('nacionalidad');
            //ubigeo_nac
            //ubigeo_vive
            $table->boolean('cond_disc')->nullable();
            //tipo_disc
            $table->char('celular',13)->unique();
            $table->string('correo_personal')->unique();
            //facu_unid
            //prog_opciones
            $table->date('fecha_postulacion');
            $table->char('puntaje_obtenido', 4);
            //modalidad_admision
            //modalidad_estudio
            $table->boolean('es_ingresante');
            //facu unid_ingreso
            //cod programa ingreso
            $table->string('correo_institucional')->unique()->nullable();//solo es nullo si no es ingresante
            $table->char('codigo_orcid', 17);         


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
        Schema::dropIfExists('usuario');
    }
};
