<?php

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

// Главная страница
Route::get('/','MainController@index')->name('home');

//О компании
Route::get('company','CompanyController@index');

//Партнёрство
Route::get('partnerShips','PartnerShipController@index');

//Портфолио
Route::get('portfolio','PortfolioController@index');

//Бегущие строки
Route::get('lines','LineController@index');

//Аптечные кресты
Route::get('cross','CrossController@index');

//Полноцветные экраны
Route::get('screen','ScreenController@index');

//Отзывы
Route::get('review','ReviewController@index');
Route::post('review','ReviewController@store');



Auth::routes();

Route::get('home', 'HomeController@index');


//Route::resource('index','IndexController');
/*
Route::get('/protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);*/


Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function () {

    Route::get('/','AdminController@adminka');


    //Всё для главной страницы

    Route::get('showMain','AdminController@showMain');
    Route::get('show','MainController@show');
    Route::get('create','MainController@create');
    Route::post('show','MainController@store');
    Route::get('show/{id}/edit','MainController@edit');
    Route::patch('show/{id}/edit','MainController@update');
    Route::delete('show/delete/{id}','MainController@destroy');


    //Всё для страницы "О компании"
    Route::get('company','CompanyController@show');
    Route::get('company/create','CompanyController@create');
    Route::post('company','CompanyController@store');
    Route::get('company/{id}/edit','CompanyController@edit');
    Route::patch('company/{id}/edit','CompanyController@update');
    Route::delete('company/delete/{id}','CompanyController@destroy');

    //Всё для страницы "Портфолио"
    Route::get('portfolio','PortfolioController@show')->name('upload.file');
    Route::get('portfolio/create','PortfolioController@create');
    Route::post('portfolio','PortfolioController@store');
    Route::delete('portfolio/delete/{id}','PortfolioController@destroy');


    //Все для страницы "Партнёрство"

    Route::get('partnerShips','PartnerShipController@show');
    Route::get('partnerShips/create','PartnerShipController@create');
    Route::post('partnerShips','PartnerShipController@store');
    Route::get('partnerShips/{id}/edit','PartnerShipController@edit');
    Route::patch('partnerShips/{id}/edit','PartnerShipController@update');
    Route::delete('partnerShips/delete/{id}','PartnerShipController@destroy');

    //Всё для контактов сотрудничества
    Route::get('partnerContacts','PartContactsController@show');
    Route::get('partnerContacts/create','PartContactsController@create');
    Route::post('partnerContacts','PartContactsController@store');
    Route::get('partnerContacts/{id}/edit','PartContactsController@edit');
    Route::patch('partnerContacts/{id}/edit','PartContactsController@update');
    Route::delete('partnerContacts/delete/{id}','PartContactsController@destroy');

    //Всё для раздела "Бегущие строки"

    Route::get('/lines','LineController@show');
    Route::get('/lines/create','LineController@create');
    Route::post('/lines','LineController@store');
    Route::get('/lines/{id}/edit','LineController@edit');
    Route::patch('/lines/{id}/edit','LineController@update');
    Route::delete('/lines/delete/{id}','LineController@destroy');

    //Всё для таблицы цен красного цвета

    Route::get('redLines','RedLineController@show');
    Route::get('redLines/create','RedLineController@create');
    Route::post('redLines','RedLineController@store');
    Route::get('redLines/{id}/edit','RedLineController@edit');
    Route::patch('redLines/{id}/edit','RedLineController@update');
    Route::delete('redLines/delete/{id}','RedLineController@destroy');

    //Всё для таблицы цен другого цвета

    Route::get('anotherColor','AnotherColorController@show');
    Route::get('anotherColor/create','AnotherColorController@create');
    Route::post('anotherColor','AnotherColorController@store');
    Route::get('anotherColor/{id}/edit','AnotherColorController@edit');
    Route::patch('anotherColor/{id}/edit','AnotherColorController@update');
    Route::delete('anotherColor/delete/{id}','AnotherColorController@destroy');

    //Всё для таблицы цен полноцветных бегущих строк

    Route::get('fullColor','FullColorController@show');
    Route::get('fullColor/create','FullColorController@create');
    Route::post('fullColor','FullColorController@store');
    Route::get('fullColor/{id}/edit','FullColorController@edit');
    Route::patch('fullColor/{id}/edit','FullColorController@update');
    Route::delete('fullColor/delete/{id}','FullColorController@destroy');

    //Всё для страницы "Аптечные кресты"
    Route::get('cross','CrossController@show');
    Route::get('cross/create','CrossController@create');
    Route::post('cross','CrossController@store');
    Route::get('cross/{id}/edit','CrossController@edit');
    Route::patch('cross/{id}/edit','CrossController@update');
    Route::delete('cross/delete/{id}','CrossController@destroy');

    //Всё для характеристик аптечных крестов

    Route::get('typeCross','TypeCrossController@show');
    Route::get('typeCross/create','TypeCrossController@create');
    Route::post('typeCross','TypeCrossController@store');
    Route::get('typeCross/{id}/edit','TypeCrossController@edit');
    Route::patch('typeCross/{id}/edit','TypeCrossController@update');
    Route::delete('typeCross/delete/{id}','TypeCrossController@destroy');


    //Всё для страницы Полноцветные экраны
    Route::get('screen','ScreenController@show');
    Route::get('screen/{id}/edit','ScreenController@edit');
    Route::patch('screen/{id}/edit','ScreenController@update');
    Route::delete('screen/delete/{id}','ScreenController@destroy');

    //Всё для страницы отзывы
    Route::get('review','ReviewController@show');
    Route::get('review/{id}/edit','ReviewController@edit');
    Route::patch('review/{id}/edit','ReviewController@update');

    //Комментарии
    Route::get('/comments','CommentController@show');
    Route::delete('/comments/delete/{id}','CommentController@destroy');

    //Пользователи
    Route::get('/users','UserController@show');
    Route::delete('/users/delete/{id}','UserController@destroy');

});

Auth::routes();