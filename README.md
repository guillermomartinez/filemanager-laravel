#Filemanager para Laravel 4
Basado de https://github.com/simogeo/Filemanager

##Requiere

"intervention/image": "2.*"

##Instalación

Edita tu `composer.json`.

	"require-dev": {
		"pqb/filemanager-laravel": "1.0"
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

	artisan asset:publish --bench="pqb/filemanager-laravel" "../"

Para que carge tinymce con el plugin filemanager agrega:

<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
tinymce.init(editor_config);
</script>
