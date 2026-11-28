<?php

use Database\Seeders\DatabaseSeeder;

test('la suite completa de DatabaseSeeder se ejecuta al 100% sin errores de columnas o relaciones', function () {
    $this->seed(DatabaseSeeder::class);

    // Verificar que los datos clave existan en la base de datos
    $this->assertDatabaseHas('roles', ['name' => 'administrador']);
    $this->assertDatabaseHas('area_tematicas', ['at_nombre' => 'Agropecuario']);
    $this->assertDatabaseHas('tipo_articulos', ['tar_nombre' => 'Artículo Original']);
    $this->assertDatabaseHas('cms_configuracion', ['cfg_siglas' => 'IETA']);
    $this->assertDatabaseCount('cms_autores', 68);
    $this->assertDatabaseCount('ediciones_varianzas', 27);
    $this->assertDatabaseCount('articulos', 32);
    $this->assertDatabaseCount('cms_cursos', 2);
    $this->assertDatabaseCount('cms_comunicados', 2);
    $this->assertDatabaseCount('cms_noticias', 4);
    $this->assertDatabaseCount('cms_galerias', 6);
    $this->assertDatabaseHas('personas', ['p_nombre' => 'Ramiro', 'p_apellido_paterno' => 'Coa']);
    $this->assertDatabaseHas('users', ['email' => 'admin@ieta.edu.bo']);
    $this->assertDatabaseHas('cms_lineas_investigaciones', ['id' => 1]);
});
