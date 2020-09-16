# TiendaVirtual
para ejecutar el programa se deben insertar los siguientes comandos, teniendo encuenta que se debe modificar el .env con la base de datos que se tenga localmente

comandos: 
php artisan key:generate
php artisan config:clear
php artisan config:cache
composer require fzaninotto/faker  
php artisan migrate
composer dump-autoload
php artisan db:seed
composer require livewire/livewire //esta es para tener el chat
composer require intervention/image
php artisan serve

la vista inicial la encontrara en la ruta / , desde ahi ya podrá acceder al resto de funcionalidades desde los botones de la pagina.