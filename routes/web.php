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


Route::get('{any?}', function ($any = null) {
    return view('base');
})->where('any', '.*');

//Route::get('dva', function () {
//    return view('pages.dva');
//});
//
//Route::get('/tri', function () {
//    return view('pages.tri');
//});
//
//Route::get('/cetri', function () {
//    return view('pages.cetri');
//});
//
//Route::get('/cetri', function () {
//    return view('pages.cetri');
//});
//
//Route::get('/cetri', function () {
//    return view('pages.cetri');
//});
//
//Route::get('/pet', function () {
//    return view('pages.pet');
//});
//
//Route::get('/sest', function () {
//    return view('pages.sest');
//});
//
//Route::get('/sedam', function () {
//    return view('pages.sedam');
//});
//
//Route::get('/osam', function () {
//    return view('pages.osam');
//});
//
//Route::get('/devet', function () {
//    return view('pages.devet');
//});
//
//Route::get('/deset', function () {
//    return view('pages.deset');
//});
//
//Route::get('/jedanaest', function () {
//    return view('pages.jedanaest');
//});
//
//Route::get('/dvanaest', function () {
//    return view('pages.dvanaest');
//});
//Route::get('/trinaest', function () {
//    return view('pages.trinaest');
//});
//
//Route::get('/cetrnaest', function () {
//    return view('pages.cetrnaest');
//});
//
//Route::get('/1', function () {
//    return view('pages.1');
//});
//Route::get('/2', function () {
//    return view('pages.2');
//});
//
//Route::get('/3', function () {
//    return view('pages.3');
//});
//
//Route::get('/4', function () {
//    return view('pages.4');
//});
//
//Route::get('/5', function () {
//    return view('pages.5');
//});
//
//Route::get('/6', function () {
//    return view('pages.6');
//});
//
//Route::get('/7', function () {
//    return view('pages.7');
//});
//Route::get('/8', function () {
//    return view('pages.8');
//});
//
//Route::get('/petnaest', function () {
//    return view('pages.petnaest');
//});
//
//Route::get('/šesnaest', function () {
//    return view('pages.šesnaest');
//});
//
//
//Route::get('/sedamnaest', function () {
//    return view('pages.sedamnaest');
//});
//Route::get('/osamnaest', function () {
//    return view('pages.osamnaest');
//});
//
//Route::get('/devetnaest', function () {
//    return view('pages.devetnaest');
//});
//
//Route::get('/9', function () {
//    return view('pages.9');
//});
//Route::get('/10', function () {
//    return view('pages.10');
//});
//Route::get('/devetnaest', function () {
//    return view('pages.devetnaest');
//});
//
//Route::get('/dvadeset', function () {
//    return view('pages.dvadeset');
//});
//
//Route::get('/11', function () {
//    return view('pages.11');
//});
//Route::get('/12', function () {
//    return view('pages.12');
//});
//Route::get('/dvadesetjedan', function () {
//    return view('pages.dvadesetjedan');
//});
//Route::get('/dvadesetdva', function () {
//    return view('pages.dvadesetdva');
//});
//
//Route::get('/dvadesettri', function () {
//    return view('pages.dvadesettri');
//});
//
//Route::get('/dvadesetcetiri', function () {
//    return view('pages.dvadesetcetiri');
//});
//Route::get('/dvadesetpet', function () {
//    return view('pages.dvadesetpet');
//});
//Route::get('/13', function () {
//    return view('pages.13');
//});
//
//Route::get('/dvadesetsest', function () {
//    return view('pages.dvadesetsest');
//});
//
//Route::get('/dvadesetsedam', function () {
//    return view('pages.dvadesetsedam');
//});
//Route::get('/15', function () {
//    return view('pages.15');
//});
//Route::get('/16', function () {
//    return view('pages.16');
//
//});Route::get('/17', function () {
//    return view('pages.17');
//
//});Route::get('/18', function () {
//    return view('pages.18');
//});
//
//Route::get('/dvadesetosam', function () {
//    return view('pages.dvadesetosam');
//});
//
//Route::get('/dvadesetdevet', function () {
//    return view('pages.dvadesetdevet');
//});
//Route::get('/trideset', function () {
//    return view('pages.trideset');
//});
//Route::get('/tridesetjedan', function () {
//    return view('pages.tridesetjedan');
//});
//Route::get('/tridesetdva', function () {
//    return view('pages.tridesetdva');
//});
//Route::get('/tridesettri', function () {
//    return view('pages.tridesettri');
//});
//Route::get('/tridesetcetiri', function () {
//    return view('pages.tridesetcetiri');
//});
//Route::get('/tridesetpet', function () {
//    return view('pages.tridesetpet');
//});
//Route::get('/tridesetsest', function () {
//    return view('pages.tridesetsest');
//});
//Route::get('/tridesetsedam', function () {
//    return view('pages.tridesetsedam');
//});
//Route::get('/tridesetosam', function () {
//    return view('pages.tridesetosam');
//});
//Route::get('/tridesetdevet', function () {
//    return view('pages.tridesetdevet');
//});
//Route::get('/cetrdeset', function () {
//    return view('pages.cetrdetsest');
//});
//Route::get('/cetrdesetjedan', function () {
//    return view('pages.cetrdesetjedan');
//});
//Route::get('/cetrdesetdva', function () {
//    return view('pages.cetrdesetdva');
//});
//Route::get('/cetrdesettri', function () {
//    return view('pages.cetrdesettri');
//});
//Route::get('/cetrdesetcetiri', function () {
//    return view('pages.cetrdesetcetiri');
//});
//Route::get('/cetrdesetpet', function () {
//    return view('pages.cetrdesetpet');
//});
//Route::get('/cetrdesetsest', function () {
//    return view('pages.cetrdesetsest');
//});
//Route::get('/cetrdesetsedam', function () {
//    return view('pages.cetrdesetsedam');
//});
//Route::get('/19', function () {
//    return view('pages.19');
//});
//Route::get('/20', function () {
//    return view('pages.20');
//});
//Route::get('/cetrdesetosam', function () {
//    return view('pages.cetrdesetosam');
//    });
//Route::get('/cetrdesetdevet', function () {
//    return view('pages.cetrdesetdevet');
//    });
//Route::get('/21', function () {
//    return view('pages.21');
//});
//Route::get('/22', function () {
//    return view('pages.22');
//});
//
//Route::get('/pedeset', function () {
//    return view('pages.pedeset');
//});
//Route::get('/pedesetjedan', function () {
//    return view('pages.pedesetjedan');
//});
//Route::get('/23', function () {
//    return view('pages.23');
//});
//
//
//Route::get('/24', function () {
//    return view('pages.24');
//});
//
//Route::get('/pedesetdva', function () {
//    return view('pages.pedesetdva');
//});
//Route::get('/pedesettri', function () {
//    return view('pages.pedesettri');
//});
//Route::get('/25', function () {
//    return view('pages.25');
//});
//Route::get('/26', function () {
//    return view('pages.26');
//});
//
//Route::get('/pedesetcetiri', function () {
//    return view('pages.pedesetcetiri');
//});
//Route::get('/pedesetpet', function () {
//    return view('pages.pedesetpet');
//});
//Route::get('/27', function () {
//    return view('pages.27');
//});
//Route::get('/28', function () {
//    return view('pages.28');
//});
//Route::get('/29', function () {
//    return view('pages.29');
//});
//
//Route::get('/30', function () {
//    return view('pages.30');
//});
//Route::get('/31', function () {
//    return view('pages.31');
//});
//Route::get('/32', function () {
//    return view('pages.32');
//});
//Route::get('/33', function () {
//    return view('pages.33');
//});
//Route::get('/34', function () {
//    return view('pages.34');
//});
//Route::get('/35', function () {
//    return view('pages.35');
//});
//
//Route::get('/36', function () {
//    return view('pages.36');
//});
//Route::get('/37', function () {
//    return view('pages.37');
//});
//Route::get('/38', function () {
//    return view('pages.38');
//});
//Route::get('/39', function () {
//    return view('pages.39');
// });
//Route::get('/40', function () {
//    return view('pages.40');
// });
//Route::get('/40', function () {
//    return view('pages.40');
// });
//Route::get('/41', function () {
//    return view('pages.41');
// });
//Route::get('/41', function () {
//    return view('pages.41');
// });
//Route::get('/42', function () {
//    return view('pages.42');
// });
//Route::get('/43', function () {
//    return view('pages.43');
// });
//
//Route::get('/44', function () {
//    return view('pages.44');
// });
//Route::get('/45', function () {
//    return view('pages.45');
// });
//Route::get('/46', function () {
//    return view('pages.46');
// });
//Route::get('/47', function () {
//    return view('pages.47');
// });
//Route::get('/48', function () {
//    return view('pages.48');
// });
//Route::get('/49', function () {
//    return view('pages.49');
// });
//Route::get('/50', function () {
//    return view('pages.50');
// });
//Route::get('/51', function () {
//    return view('pages.51');
// });
//Route::get('/52', function () {
//    return view('pages.52');
// });
//Route::get('/53', function () {
//    return view('pages.53');
// });
//Route::get('/54', function () {
//    return view('pages.54');
// });
//Route::get('/55', function () {
//    return view('pages.55');
// });
//Route::get('/pedesetsest', function () {
//    return view('pages.pedesetsest');
//});
//Route::get('/pedesetsedam', function () {
//    return view('pages.pedesetsedam');
//});
//Route::get('/pedesetosam', function () {
//    return view('pages.pedesetosam');
//});
//Route::get('/pedesetdevet', function () {
//    return view('pages.pedesetdevet');
//});
//Route::get('/sesdeset', function () {
//    return view('pages.sesdeset');
//});
//Route::get('/sesdesetjedan', function () {
//    return view('pages.sesdesetjedan');
//});
//Route::get('/sesdesetdva', function () {
//    return view('pages.sesdesetdva');
//});
//Route::get('/sesdesettri', function () {
//    return view('pages.sesdesettri');
//});
//Route::get('/sesdesetcetiri', function () {
//    return view('pages.sesdesetcetiri');
//});
//Route::get('/sesdesetpet', function () {
//    return view('pages.sesdesetpet');
//});
//Route::get('/sesdesetsest', function () {
//    return view('pages.sesdesetsest');
//});
//Route::get('/sesdesetsedam', function () {
//    return view('pages.sesdesetsedam');
//});
//Route::get('/sesdesetosam', function () {
//    return view('pages.sesdesetosam');
//});
//Route::get('/sesdesetdevet', function () {
//    return view('pages.sesdesetdevet');
//});
//Route::get('/sedamdeset', function () {
//    return view('pages.sedamdeset');
//});
//Route::get('/sedamdesetdva', function () {
//    return view('pages.sedamdesetdva');
//});
//Route::get('/sedamdesetjedan', function () {
//    return view('pages.sedamdesetdva');
//});
//Route::get('/sedamdesettri', function () {
//    return view('pages.sedamdesettri');
//});
//Route::get('/sedamdesetcetiri', function () {
//    return view('pages.sedamdesetcetiri');
//});
//Route::get('/sedamdesetpet', function () {
//    return view('pages.sedamdesetpet');
//});
//Route::get('/sedamdesetsest', function () {
//    return view('pages.sedamdesetsest');
//});
//Route::get('/sedamdesetsedam', function () {
//    return view('pages.sedamdesetsedam');
//});
//Route::get('/sedamdesetosam', function () {
//    return view('pages.sedamdesetosam');
//});
//Route::get('/sedamdesetdevet', function () {
//    return view('pages.sedamdesetdevet');
//});
//Route::get('/osamdeset', function () {
//    return view('pages.osamdeset');
//});
//Route::get('/osamdesetjedan', function () {
//    return view('pages.osamdesetjedan');
//});
//Route::get('/osamdesetdva', function () {
//    return view('pages.osamdesetdva');
//});
//Route::get('/osamdesettri', function () {
//    return view('pages.osamdesettri');
//});
//Route::get('/osamdesetcetiri', function () {
//    return view('pages.osamdesetcetiri');
//});
//Route::get('/osamdesetpet', function () {
//    return view('pages.osamdesetpet');
//});
//Route::get('/osamdesetsest', function () {
//    return view('pages.osamdesetsest');
//});
//Route::get('/osamdesetsedam', function () {
//    return view('pages.osamdesetsedam');
//});
//Route::get('/osamdesetosam', function () {
//    return view('pages.osamdesetosam');
//});