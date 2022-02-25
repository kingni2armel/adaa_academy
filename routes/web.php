<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PraticalWorkController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use  App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherCourseController;
use App\Http\Controllers\SessionStudentController;
use App\Http\Controllers\DayliController;
use App\Http\Controllers\StudentDayliController;
use App\Http\Controllers\GradeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
 les routes  de l'utilisateur
*/

Route::post('authenticate',[UserController::class,'authenticate'])->name('authenticate');
Route::get('login',[UserController::class,'login'])->name('login');

/*
    les controlleurs de la sesssion
*/

Route::get('session',[SessionController::class,'session'])->name('session');
Route::post('session',[SessionController::class,'createSession'])->name('CreateSession');
Route::get('listesession',[SessionController::class,'GetAllSession'])->name('listesession');
Route::get('update',[SessionController::class,'show'])->name('show');
Route::post('update/{id}',[SessionController::class,'UpdateSession'])->name('UpdateSession');


/*

                le controlleurs de la session=-etudiants
*/

Route::get('affectersession',[SessionStudentController::class,'GetP'])->name('GetP');
Route::get('affectersession',[SessionStudentController::class,'GetListeSessionAndStudent'])->name('GetListeSessionAndStudent');
Route::post('section-affecte',[SessionStudentController::class,'AffecterSession'])->name('AffecterSession');
/*
   les controlleurs des travaux pratiques
*/

Route::get('create',[PraticalWorkController::class,'indexx'])->name('indexx');
Route::post('create/{id}',[PraticalWorkController::class,'CreatePraticalWork'])->name('CreatePraticalWork');
Route::get('UpdateSession',[PraticalWorkController::class,'GetPageUpdate'])->name('GetPageUpdate');
Route::get('listetravauxpratique',[PraticalWorkController::class,'GetListePraticalWork'])->name('GetListePraticalWork');
Route::get('listetravauxpratique',[PraticalWorkController::class,'GetListePraticalOFid'])->name('GetListePraticalOFid');
Route::get('updatetravauxpratique',[PraticalWorkController::class,'GetPageUpdatePraticalWork'])->name('GetPageUpdatePraticalWork');
Route::post('updatetravauxpratique/{id}',[PraticalWorkController::class,'UpdatePraticalWork'])->name('UpdatePraticalWork');

/*
    les controleurs des courses 
*/

Route::get('creation',[CourseController::class,'GetPage'])->name('GetPage');
Route::post('creation',[CourseController::class,'CreateCourse'])->name('CreateCourse');
Route::get('listecour',[CourseController::class,'GetListeCourse'])->name('GetListeCourse');
Route::get('modification',[CourseController::class,'GetPageUpdateCourse'])->name('GetPageUpdateCourse');
Route::post('modification/{id}',[CourseController::class,'UpdateCourse'])->name('UpdateCourse');
Route::post('suppresion/{id}',[CourseController::class,'DeleteCourse'])->name('DeleteCourse');


/*
        lec controleurs de session-course
:class,
*/
Route::post('affectexxxxr',[TeacherCourseController::class,'AffecterCourseTeacher'])->name('AffecterCourseTeacher');
Route::get('affectercour',[TeacherCourseController::class,'GetPageTC'])->name('GetPageTC');
Route::get('affectercour',[TeacherCourseController::class,'GetListeTeachers'])->name('GetListeTeachers');
Route::get('affectercours',[TeacherCourseController::class,'GetListeCourse'])->name('GetListeCourse');

/*
    les controleurs des  students 
*/  

Route::get('addstudent',[StudentController::class,'GetPageCreateStudent'])->name('GetPageCreateStudent');
Route::post('addstudent',[StudentController::class,'CreateStudent'])->name('CreateStudent');
Route::get('listestudent',[StudentController::class,'GetListeStudent'])->name('GetListeStudent');
Route::post('suppressions/{id}',[StudentController::class,'DeleteStudent'])->name('DeleteStudent');

/*
    les controleurs des formateurs 
*/


Route::get('addteacher',[TeacherController::class,'GetPageCreateTeacher'])->name('GetPageCreateTeacher');
Route::post('addteacher',[TeacherController::class,'CreateTeacher'])->name('CreateTeacher');
Route::get('listeteacher',[TeacherController::class,'GetListeTeacher'])->name('GetListeTeacher');
Route::post('suppression/{id}',[TeacherController::class,'DeleteTeacher'])->name('DeleteTeacher');

/*
    les controleurs des seances 
*/

Route::get('createseance',[DayliController::class,'GetPageCreateSeance'])->name('GetPageCreateSeance');
Route::post('createseance/{id}',[DayliController::class,'CreateSeance'])->name('CreateSeance');
Route::get('listeseance',[DayliController::class,'GetListeSeance'])->name('GetListeSeance');

/*
    les controleurs des students-seances;
*/

Route::get('donnerstatut',[StudentDayliController::class,'GetpageAffecter'])->name('GetpageAffecter');
Route::get('donnerstatut/{id}',[StudentDayliController::class,'GetListeStudent'])->name('GetListeStudent');
Route::post('statut/{id}',[StudentDayliController::class,'AffecterStatut'])->name('AffecterStatut');
Route::get('dashboard',DashboardController::class)->name('dashboard');

/*
    les controleurs des grades;
*/

Route::get('attribuerNotes',[GradeController::class,'getpage'])->name('getpage');
Route::post('note/{id}',[GradeController::class,'GiveGrade'])->name('GiveGrade');
