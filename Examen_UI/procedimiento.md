# PROCEDIMIENTO EXAMEN I - 2024

## CREAR BASE DE DATOS
    Para crear la base de datos se utilizara los siguientes comandos en la CMD/PHPADMIN
        CREATE DATABASE aerolinea;

## CREAR MIGRATIONS
    php artisan make:migration Nombre_Migracion

    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateTipoAsientoTable extends Migration
    {
        public function up()
        {
            Schema::create('tipo_asiento', function (Blueprint $table) {
                $table->id();
                $table->string('descripcion', 50);
                $table->double('precio');
                $table->string('estado', 2);
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('tipo_asiento');
        }
    }

## CREAR MODELS
    php artisan make:model TipoAsiento
    
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class TipoAsiento extends Model
    {
        protected $table = 'tipo_asiento';
        protected $fillable = ['descripcion', 'precio', 'estado'];
    }

## CREAR CONTROLLERS
    php artisan make:controller TipoAsientoController


