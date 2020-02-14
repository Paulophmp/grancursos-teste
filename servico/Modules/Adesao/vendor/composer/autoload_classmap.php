<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\Adesao\\Database\\Seeders\\AdesaoDatabaseSeeder' => $baseDir . '/Database/Seeders/AdesaoDatabaseSeeder.php',
    'Modules\\Adesao\\Database\\Seeders\\AdesaoServidorTableSeeder' => $baseDir . '/Database/Seeders/AdesaoServidorTableSeeder.php',
    'Modules\\Adesao\\Database\\Seeders\\AdesaoTableSeeder' => $baseDir . '/Database/Seeders/AdesaoTableSeeder.php',
    'Modules\\Adesao\\Entities\\Adesao' => $baseDir . '/Entities/Adesao.php',
    'Modules\\Adesao\\Entities\\Servidor' => $baseDir . '/Entities/Servidor.php',
    'Modules\\Adesao\\Exceptions\\JaExisteCpfCadastradoEmAdesaoException' => $baseDir . '/Exceptions/JaExisteCpfCadastradoEmAdesãoException.php',
    'Modules\\Adesao\\Exceptions\\JaExisteTermoAdesaoParaMunicipioException' => $baseDir . '/Exceptions/JaExisteTermoAdesaoParaMunicipioException.php',
    'Modules\\Adesao\\Http\\Controllers\\AdesaoController' => $baseDir . '/Http/Controllers/AdesaoController.php',
    'Modules\\Adesao\\Http\\Controllers\\AdesaoPdfController' => $baseDir . '/Http/Controllers/AdesaoPdfController.php',
    'Modules\\Adesao\\Http\\Requests\\AdesaoRequest' => $baseDir . '/Http/Requests/AdesaoRequest.php',
    'Modules\\Adesao\\Providers\\AdesaoServiceProvider' => $baseDir . '/Providers/AdesaoServiceProvider.php',
    'Modules\\Adesao\\Providers\\RouteServiceProvider' => $baseDir . '/Providers/RouteServiceProvider.php',
    'Modules\\Adesao\\Repositories\\AdesaoRepository' => $baseDir . '/Repositories/AdesaoRepository.php',
    'Modules\\Adesao\\Repositories\\AdesaoRepositoryInterface' => $baseDir . '/Repositories/AdesaoRepositoryInterface.php',
    'Modules\\Adesao\\Services\\AdesaoService' => $baseDir . '/Services/AdesaoService.php',
    'Modules\\Adesao\\Tests\\Feature\\AdesaoControllerTest' => $baseDir . '/Tests/Feature/AdesaoControllerTest.php',
    'Modules\\Adesao\\Transformers\\AdesaoResource' => $baseDir . '/Transformers/AdesaoResource.php',
    'Modules\\Adesao\\Transformers\\ServidorResource' => $baseDir . '/Transformers/ServidorResource.php',
);