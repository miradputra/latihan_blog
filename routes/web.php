
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/relasi-1', function () {

    $mahasiswa = App\Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->wali->nama;
});

Route::get('/relasi-2', function () {

    $mahasiswa = App\Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
	return $mahasiswa->dosen->nama;
});

Route::get('/relasi-3', function () {

    $dosen = App\Dosen::where('nama', '=', 'Yulianto')->first();

    foreach ($dosen->mahasiswa as $data) {
        echo '<li> Nama : ' . $data->nama . ' <strong>' . $data->nim . '</strong></li>';
    }
});

Route::get('relasi-4', function() {

    # Bila kita ingin melihat hobi saya
    $novay = App\Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    # Tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp){
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function() {
    $mandi_hujan = App\Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    foreach ($mandi_hujan->mahasiswa as $data) {
        echo '<li> Nama : ' . $data->nama . ' <strong>' . $data->nim . '</strong></li>';
    }
});

Route::get('eloquent', function(){
    $mahasiswa = App\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    return view('eloquent', compact('mahasiswa'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/hobi', 'HobiController');
    Route::resource('/dosen', 'DosenController');
    Route::resource('/wali', 'WaliController');
    Route::resource('/mahasiswa', 'MahasiswaController');
    Route::resource('/biodata', 'BiodataController');
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/tag', 'TagController');
});

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/about', function () {
        return view('frontend.about');
    });
    Route::get('/contact', function () {
        return view('frontend.contact');
    });
    Route::get('/blog', 'FrontendController@allblog')->name('all.blog');
    Route::get('/blog/{artikel}', 'FrontendController@detailblog')->name('detail.blog');
    Route::get('/blog/kategori/{cat}', 'FrontendController@blogcat')->name('cat.blog');
    Route::get('/blog/tag/{tag}', 'FrontendController@blogtag')->name('tag.blog');
});
