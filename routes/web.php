<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KokabController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PartaiController;
use App\Http\Controllers\TypeCandidatesController;
use App\Http\Controllers\CalegController;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\PemiluSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CandidatesPemiluController;



Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', function(){
	if (Auth::check() && Auth::user()->level == "relawan") {
		return redirect('relawan');
}elseif (Auth::check() && Auth::user()->level == "admin") {
		return redirect('admin/dashboard');
	}else{
		return redirect()->route('login');
	}
})->name('home');

Route::group(['prefix'=>'relawan'],function(){
	Route::get('/',[VolunteerController::class,'index']);

	Route::group(['prefix'=>'pemilu'],function(){
		Route::get('/',[VolunteerController::class,'create']);
		Route::get('caleg/{pemilu_setting_id}',[VolunteerController::class,'caleg']);
	});
});

Route::group(['prefix'=>'province','middleware'=>'admin'],function(){
	Route::get('/',[ProvinsiController::class,'index'])->name('province.index');
	Route::post('store',[ProvinsiController::class,'store'])->name('province.store');
	Route::get('destroy/{id}',[ProvinsiController::class,'destroy'])->name('province.destroy');
	Route::patch('update/{id}',[ProvinsiController::class,'update'])->name('province.update');
});

Route::group(['prefix'=>'kokab','middleware'=>'admin'],function(){
	Route::get('/',[KokabController::class,'index'])->name('kokab.index');
	Route::post('store',[KokabController::class,'store'])->name('kokab.store');
	Route::get('destroy/{id}',[KokabController::class,'destroy'])->name('kokab.destroy');
	Route::patch('update/{id}',[KokabController::class,'update'])->name('kokab.update');
});

Route::group(['prefix'=>'kecamatan','middleware'=>'admin'],function(){
	Route::get('/',[KecamatanController::class,'index'])->name('kecamatan.index');
	Route::post('store',[KecamatanController::class,'store'])->name('kecamatan.store');
	Route::get('destroy/{id}',[KecamatanController::class,'destroy'])->name('kecamatan.destroy');
	Route::patch('update/{id}',[KecamatanController::class,'update'])->name('kecamatan.update');
});

Route::get('kecamatan/kokab/{province_id}',[KecamatanController::class,'kokab'])->name('kecamatan.kokab');

Route::group(['prefix'=>'kelurahan','middleware'=>'admin'],function(){
	Route::get('/',[KelurahanController::class,'index'])->name('kelurahan.index');
	Route::post('store',[KelurahanController::class,'store'])->name('kelurahan.store');
	Route::get('destroy/{id}',[KelurahanController::class,'destroy'])->name('kelurahan.destroy');
	Route::patch('update/{id}',[KelurahanController::class,'update'])->name('kelurahan.update');
});

Route::get('kelurahan/kecamatan/{kokab_id}',[KelurahanController::class,'kecamatan'])->name('kelurahan.kecamatan');

Route::group(['prefix'=>'partai','middleware'=>'admin'],function(){
	Route::get('/',[PartaiController::class,'index'])->name('partai.index');
	Route::post('store',[PartaiController::class,'store'])->name('partai.store');
	Route::get('destroy/{id}',[PartaiController::class,'destroy'])->name('partai.destroy');
	Route::patch('update/{id}',[PartaiController::class,'update'])->name('partai.update');
});

Route::group(['prefix'=>'type_candidates','middleware'=>'admin'],function(){
	Route::get('/',[TypeCandidatesController::class,'index'])->name('type_candidates.index');
	Route::post('store',[TypeCandidatesController::class,'store'])->name('type_candidates.store');
	Route::get('destroy/{id}',[TypeCandidatesController::class,'destroy'])->name('type_candidates.destroy');
	Route::patch('update/{id}',[TypeCandidatesController::class,'update'])->name('type_candidates.update');
});

Route::group(['prefix'=>'caleg','middleware'=>'admin'],function(){
	Route::get('/',[CalegController::class,'index'])->name('caleg.index');
	Route::post('store',[CalegController::class,'store'])->name('caleg.store');
	Route::get('destroy/{id}',[CalegController::class,'destroy'])->name('caleg.destroy');
	Route::patch('update/{id}',[CalegController::class,'update'])->name('caleg.update');
});

Route::group(['prefix'=>'tps','middleware'=>'admin'],function(){
	Route::get('/',[TpsController::class,'index'])->name('tps.index');
	Route::post('store',[TpsController::class,'store'])->name('tps.store');
	Route::get('destroy/{id}',[TpsController::class,'destroy'])->name('tps.destroy');
	Route::patch('update/{id}',[TpsController::class,'update'])->name('tps.update');
});

Route::get('tps/di/{kelurahan_id}',[TpsController::class,'kelurahan'])->name('tps.kelurahan');

Route::get('tps/kelurahan/{kecamatan_id}',[TpsController::class,'kelurahan_by_kecamatan']);
Route::get('tps/pemilu/{type}/{prov_id}/{kokab_id}',[TpsController::class,'pemilu']);

Route::group(['prefix'=>'pemilu_setting','middleware'=>'admin'],function(){
	Route::get('/',[PemiluSettingController::class,'index'])->name('pemilu_setting.index');
	Route::post('store',[PemiluSettingController::class,'store'])->name('pemilu_setting.store');
	Route::get('destroy/{id}',[PemiluSettingController::class,'destroy'])->name('pemilu_setting.destroy');
	Route::patch('update/{id}',[PemiluSettingController::class,'update'])->name('pemilu_setting.update');
});

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::get('relawan',[VolunteerController::class,'admin']);
	Route::get('dashboard',[HomeController::class,'index']);
});

Route::group(['prefix'=>'transaction','middleware'=>'auth'],function(){
	Route::post('store',[TransactionController::class,'store']);
	Route::get('result',[TransactionController::class,'result']);
	Route::get('caleg/{pemilu_setting_id}',[TransactionController::class,'caleg']);
	Route::get('caleg_vote/{pemilu_setting_id}',[TransactionController::class,'getCalegVote']);
});

Route::group(['prefix'=>'candidates_pemilu','middleware'=>'admin'],function(){
	Route::get('/{pemilu_setting_id}',[CandidatesPemiluController::class,'index'])->name('candidates_pemilu.index');
	Route::get('destroy/{id}',[CandidatesPemiluController::class,'destroy'])->name('candidates_pemilu.destroy');
	Route::patch('update/{id}',[CandidatesPemiluController::class,'update'])->name('candidates_pemilu.update');
});
