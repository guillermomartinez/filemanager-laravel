#Filemanager para Laravel 5
Basado de https://github.com/simogeo/Filemanager

##Requiere

"intervention/image": "2.*"

##Instalación

Edita tu `composer.json`.

	"require": {
		"pqb/filemanager-laravel": "2.*"
	}

Ejecuta

	composer update

Agrega en tu archivo app.php

	'Pqb\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Y en el Facade

	'FilemanagerLaravel'=> 'Pqb\FilemanagerLaravel\Facades\FilemanagerLaravel',

Copia el Controller, View a la carpeta resources/views/vendor/filemanager-laravel, la carpeta filemanager y tinymce a tu carpeta public, con el siguiente comando:
	
	php artisan vendor:publish

Al final Agrega en routes.php

	Route::group(array('before' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});


Para que carge tinymce con el plugin filemanager agrega:

```
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
tinymce.init(editor_config);
</script>
```


#Filemanager para Laravel 4
Basado de https://github.com/simogeo/Filemanager

##Requiere

"intervention/image": "2.*"

##Instalación

Edita tu `composer.json`.

	"require": {
		"pqb/filemanager-laravel": "1.*"
	}

Ejecuta

	composer update

Agrega en tu archivo app.php

	'Pqb\FilemanagerLaravel\FilemanagerLaravelServiceProvider',

Y en el Facade

	'FilemanagerLaravel'=> 'Pqb\FilemanagerLaravel\Facades\FilemanagerLaravel',

Agrega en routes.php

	Route::group(array('before' => 'auth'), function(){
		Route::controller('filemanager', 'FilemanagerLaravelController');
	});

Copia las carpetas filemanager y tinymce a tu carpeta public

	php artisan asset:publish --path="vendor/pqb/filemanager-laravel/public" "../"

Para que carge tinymce con el plugin filemanager agrega:

```
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
tinymce.init(editor_config);
</script>
```
##Demo
http://www.youtube.com/watch?v=yowJRKZ3Ums
