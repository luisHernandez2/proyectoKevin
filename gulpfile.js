/*
* Dependencias
*/
var gulp = require('gulp'),
	jshint = require('gulp-jshint'),
	concat = require('gulp-concat'),
	stylus = require('gulp-stylus'),
	nib = require('nib'),
	watch = require('gulp-watch'),
	uglify = require('gulp-uglify');

/*
* Configuración de la tarea 'demo'
*/
gulp.task('jsgeneral', function () {
	gulp.src('js/source/generales/*.js')
		.pipe(jshint())/*revisa los javascrip a ver si hay error*/
		.pipe(jshint.reporter('default'))/*manda error en consola*/
		.pipe(concat('jsgeneral.min.js'))/*concatena*/
		.pipe(uglify())/*minimifica*/
		.pipe(gulp.dest('js/build/'))/*lo ponemos en la carpeta build*/
});
/**/
gulp.task('nib', function(){/*mi tarea se llaamra nib*/
    gulp.src('./css/style.styl')/*entradas stylus, y le decimos que use la libreria nib*/
        .pipe(stylus({ use: [nib()], compress: true }))
        .pipe(gulp.dest('./css/'));
});

gulp.task('watch', function () {
	gulp.watch('css/style.styl', ['nib']);
});
/*
js/source/alone.js
js/source/[asterisco].js
js/[Asterisco][Asterisco]/[Asterisco].js coincide con los archivos que terminen en .js dentro de la carpeta js y dentro de todas sus sub-carpetas
!js/source/3.js Excluye especificamente el archivo 3.js.
static/*.+(js|css) coincide con los archivos que terminen en .js ó .css
/* 
Se define la tarea estaticos, la cual corra otras 3 tareas
gulp.task('estaticos', ['imagenes', 'css', 'js']);
*/

/*
Ejecutar la tarea css cuando la tarea imagenes haya terminado
gulp.task('css', ['imagenes'], function () {...});
*/

/*
definimos una tarea por defecto
gulp.task('default', function () {...});
o que una tarea por defecto sea una lista de tareas
gulp.task('default', ['css', 'js']);
para ejecutar ponemos en la terminal: gulp
*/

/*Cada vez que se modifique un file dentro de source se ejecutará la tarea js*/
//gulp.watch('js/source/*.js', ['js']);
 /*gulp.watch('js/source/*.js', function(){
 aquí va el cod a ejecutar, o también se podría ejecutar una tarea mediante el metodo gulp.start('miTarea')}); */