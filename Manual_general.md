# Manual General de _Laravel_

Este documento contiene algunas indicaciones o comandos basicos para la creacion de proyectos _Web_ cpon el _framework Laravel_.

- ## Creacion de proyectos

  Este comando crea un proyecto _Laravel_

      $ composer create-project laravel/laravel nombre-proyecto

- ## Componente _artisan_

  _Artisan_ es una linea de comandos, creada para poder trabajar en _laravel_, nos ayuda a tener comandos establecidos para ciertas actividades

  - **Ver lista de comandos y funcionalidades que nos suministra _artisan_**

        $ php artisan

  - **Ejecutar proyecto**

        $ php artisan serve

  - **Migraciones**

    _Laravel_ cuenta con un _ORM_ robusto el cual nos permitira administrar la base de dats d emanera eficientes,

    - Modelos

      Como todo _ORM_ este se basa en modelos, mara crear un modelo usaremos el siguiebte comando

          $ php artisan make:model modelo -m

      **_make:model_** es la directoiva que me permite crear el nuevo modelo **_-m_** esla directiva que usamos para indicar que al momento de crear el modelo tambien me cree la migracion correspondiente

      Para apliar la migracion usaremos el siguiente comando

          $ php artisan migrate

      Esto aplicara todas las migraciones pendientes, para ver el estado de las migraciones usaremos el comando

          $ php artisan migrate:status

      En caso de querernos desacer del ultimo cambio ejecutamos el sigiente comando

          $ php artisan migrate:rollback

      En caso de querer modificar una tabla, **SIN** afectar los datos que seencuenytren almacenados se crea una nueva migracion con un nombre descriptivo del cambio y se agregan los cambios pertinentes.

          $ php artisan make:migration add_person_id_to_users

      Luego de esto ejecutamos nuevamente el comando _migrate_ y se efectuaran loscambioa realizados.

  - Controladores

    Los controladores me permitiran unir la vista con el modelo, para crear un controlador usamos el siguiente comando

        $ php artisan make:controller nombrw_controlador

- **Sintaxis de plantillas _Laravel_**

  Laravel cuenta con un sistema de plantillas que me permite crear componentes los cuales pueden ser heredados o incorporados entre ellos

  - **_@yield_**

    Esta directiva me crea un espacio dentro de un componente, el cual puede hacerse referencia desde otra plantilla, para crear un espacio se hace de la siguiente manera:

        @yield('seccion')

    Para poder usar la plantilla donde creamos este espacio se usa este codigo

        @extends('plantilla_maestra');

    Extendemos de la plantilla maestra

        @section('seccion')

    Abrimos el bloque se seccion definico den laplantilla maestra

        @endsection

    Cerramos el bloque de seccion definido en la plantilla maestra

- ## Pruebas

  Las pruebas son componentes especiales al momento de realizar desarroolo de sofwhare, automatizar esta pruebas nos garantisan el buen funcionamiento de nuestra aplicacion, las pruebas no son usadas para erradicar errores, la funcion principal de estas es comprovar la presencia de estos.

  _Laravel_ nos provee un sistema de fpruebas uvicado en el directorio _test_:

  Este directorio contiene varrios compoentes

  - _Test_ : Directorio de pruebas.

    - _Feature_: Aqui podemos agregar las pruebas que van a simulara peticiones _HTTP_ al servidor.

    - _Unit_: Aqui podemos agregar las pruebas que van aprobar partes individuales a de nuestra aplicacion, como clases y metodos.

  - ## **Ejeucion de las pruebas**

        $ vendor/bin/phpunit

    Para no escribir tanto codigo al memnto de ejecutar las pruebas podemos definir previamente un alias con el siguiente comando:

          $ alias [alias]=vendor/bin/phpunit

    Por ejempplo:

          $ alias tests=vendor/bin/phpunit

  - ## **Crear pruebas**

        $ php artisan make:test NameTest
