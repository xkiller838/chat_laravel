## Imagenes del funionamiento del sistema

![listausuarios](https://user-images.githubusercontent.com/33810066/124825333-19911300-df39-11eb-9afe-0fd51f486ae9.png)

![chat](https://user-images.githubusercontent.com/33810066/124825346-1eee5d80-df39-11eb-8a7e-e106059a5d0e.png)

![chatsmultiples](https://user-images.githubusercontent.com/33810066/124826751-d8016780-df3a-11eb-8e96-a01f9a29d112.png)


## Laravel

El sistema esta desarrollado en laravel 7, boostrap, javascript y el paquete laravel websockets y actualizado a la version de laravel 8.12 el sistema cuenta con una tabla desde la cual se puede acceder del menu en la barra de navegacion despues de registrarte o hacer login el sistema funciona para chats privados de uno a uno codigo mdificable para un chat de multiples usuarios

https://beyondco.de/docs/laravel-websockets/getting-started/introduction

## Pasos a ejecutar

1) crear el env
2) ejecutar composer install
3) npm install
4) npm run dev
5) php artisan websocket:serve

### Funciones del sistema

1) mostrar el nombre del usuario con el que se esta chateando
2) mostrar si el usuario esta online o no
3) permite ver al usuario que le estan escribiendo en tiempo real 
4) almacenamiento del dialogo en base de datos
5) mostrando fecha y hora de cada mensaje

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
