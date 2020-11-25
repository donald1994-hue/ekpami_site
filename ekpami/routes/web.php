<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.welcome');
});

Route::get('/repertoire2013', function () {
    return view('repertoire2013');
});
Route::get('/webtvEnakpami', function () {
    return view('webtvEnakpami');
});

Route::get('/repertoire2020', function () {
    return view('repertoire2020');
});

/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2013
|--------------------------------------------------------------------------

*/

Route::get('/JeanMA', function () {
    return view('mots2013.JeanMA');
});
Route::get('/josephA', function () {
    return view('mots2013.josephA');
});

Route::get('/PNM', function () {
    return view('mots2013.PNM');
});

Route::get('/abap', function () {
    return view('mots2013.abap');
});

Route::get('/plein', function () {
    return view('mots2013.plein');
});
Route::get('/a1', function () {
    return view('alibori.a1');
});

/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/
Route::get('/JeanMA', function () {
    return view('mots2020.JeanMA');
});
Route::get('/josephA', function () {
    return view('mots2020.josephA');
});

Route::get('/PNM', function () {
    return view('mots2020.PNM');
});

Route::get('/abap', function () {
    return view('mots2020.abap');
});

Route::get('/plein', function () {
    return view('mots2020.plein');
});
Route::get('/cawa', function () {
    return view('mots2020.cawa');
});

/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020 ALIBORI
|--------------------------------------------------------------------------

*/

Route::get('/index', function () {
    return view('alibori2020.index');
});

Route::get('/a1', function () {
    return view('alibori2020.a1');
});

/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020 ATACORA
|--------------------------------------------------------------------------

*/
Route::get('/indexatacora', function () {
    return view('atacora2020.indexatacora');
});

Route::get('/at1', function () {
    return view('atacora2020.at1');
});
Route::get('/at2', function () {
    return view('atacora2020.at2');
});

Route::get('/at3', function () {
    return view('atacora2020.at3');
});
Route::get('/at4', function () {
    return view('atacora2020.at4');
});

Route::get('/at5', function () {
    return view('atacora2020.at5');
});

Route::get('/at6', function () {
    return view('atacora2020.at6');
});

Route::get('/at7', function () {
    return view('atacora2020.at7');
});

Route::get('/at8', function () {
    return view('atacora2020.at8');
});


/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/
Route::get('/indexatlantique', function () {
    return view('atlantique2020.indexatlantique');
});
Route::get('/l1', function () {
    return view('atlantique2020.l1');
});
Route::get('/l2', function () {
    return view('atlantique2020.l2');
});
Route::get('/l3', function () {
    return view('atlantique2020.l3');
});
Route::get('/l4', function () {
    return view('atlantique2020.l4');
});
Route::get('/l5', function () {
    return view('atlantique2020.l5');
});
Route::get('/l6', function () {
    return view('atlantique2020.l6');
});

Route::get('/l7', function () {
    return view('atlantique2020.l7');
});

Route::get('/l8', function () {
    return view('atlantique2020.l8');
});

Route::get('/l9', function () {
    return view('atlantique2020.l9');
});
Route::get('/l10', function () {
    return view('atlantique2020.l10');
});
Route::get('/l11', function () {
    return view('atlantique2020.l11');
});
Route::get('/l12', function () {
    return view('atlantique2020.l12');
});
Route::get('/l13', function () {
    return view('atlantique2020.l13');
});
Route::get('/l14', function () {
    return view('atlantique2020.l14');
});

Route::get('/l15', function () {
    return view('atlantique2020.l15');
});

Route::get('/l16', function () {
    return view('atlantique2020.l16');
});
Route::get('/l17', function () {
    return view('atlantique2020.l17');
});
Route::get('/l18', function () {
    return view('atlantique2020.l18');
});
Route::get('/l19', function () {
    return view('atlantique2020.l19');
});

Route::get('/l20', function () {
    return view('atlantique2020.l20');
});
Route::get('/l21', function () {
    return view('atlantique2020.l21');
});

Route::get('/l22', function () {
    return view('atlantique2020.l22');
});

Route::get('/l23', function () {
    return view('atlantique2020.l23');
});

Route::get('/l24', function () {
    return view('atlantique2020.l24');
});
Route::get('/l25', function () {
    return view('atlantique2020.l25');
});

Route::get('/l26', function () {
    return view('atlantique2020.l26');
});
Route::get('/l27', function () {
    return view('atlantique2020.l27');
});

Route::get('/l28', function () {
    return view('atlantique2020.l28');
});

Route::get('/l29', function () {
    return view('atlantique2020.l29');
});

Route::get('/l30', function () {
    return view('atlantique2020.l30');
});
Route::get('/l31', function () {
    return view('atlantique2020.l31');
});
Route::get('/l32', function () {
    return view('atlantique2020.l32');
});
Route::get('/l33', function () {
    return view('atlantique2020.l33');
});
Route::get('/l34', function () {
    return view('atlantique2020.l34');
});
Route::get('/l35', function () {
    return view('atlantique2020.l35');
});
Route::get('/l36', function () {
    return view('atlantique2020.l36');
});
Route::get('/l37', function () {
    return view('atlantique2020.l37');
});
Route::get('/l38', function () {
    return view('atlantique2020.l38');
});
Route::get('/l39', function () {
    return view('atlantique2020.l39');
});

Route::get('/l40', function () {
    return view('atlantique2020.l40');
});
Route::get('/l41', function () {
    return view('atlantique2020.l41');
});
Route::get('/l42', function () {
    return view('atlantique2020.l42');
});
Route::get('/l43', function () {
    return view('atlantique2020.l43');
});

Route::get('/l44', function () {
    return view('atlantique2020.l44');
});
Route::get('/l45', function () {
    return view('atlantique2020.l45');
});
Route::get('/l46', function () {
    return view('atlantique2020.l46');
});

Route::get('/l47', function () {
    return view('atlantique2020.l47');
});
Route::get('/l48', function () {
    return view('atlantique2020.l48');
});
Route::get('/l49', function () {
    return view('atlantique2020.l49');
});
Route::get('/l50', function () {
    return view('atlantique2020.l50');
});
Route::get('/l51', function () {
    return view('atlantique2020.l51');
});
Route::get('/l52', function () {
    return view('atlantique2020.l52');
});
Route::get('/l53', function () {
    return view('atlantique2020.l53');
});
Route::get('/l54', function () {
    return view('atlantique2020.l54');
});
Route::get('/l55', function () {
    return view('atlantique2020.l55');
});
Route::get('/l56', function () {
    return view('atlantique2020.l56');
});
Route::get('/l57', function () {
    return view('atlantique2020.l57');
});

Route::get('/l58', function () {
    return view('atlantique2020.l58');
});

Route::get('/l59', function () {
    return view('atlantique2020.l59');
});

Route::get('/l60', function () {
    return view('atlantique2020.l60');
});
Route::get('/l61', function () {
    return view('atlantique2020.l61');
});

Route::get('/l62', function () {
    return view('atlantique2020.l62');
});

Route::get('/l63', function () {
    return view('atlantique2020.l63');
});


Route::get('/l64', function () {
    return view('atlantique2020.l64');
});

Route::get('/l65', function () {
    return view('atlantique2020.l65');
});

Route::get('/l66', function () {
    return view('atlantique2020.l66');
});
Route::get('/l67', function () {
    return view('atlantique2020.l67');
});

Route::get('/l68', function () {
    return view('atlantique2020.l68');
});

Route::get('/l69', function () {
    return view('atlantique2020.l69');
});
Route::get('/l70', function () {
    return view('atlantique2020.l70');
});

Route::get('/l71', function () {
    return view('atlantique2020.l71');
});

Route::get('/l72', function () {
    return view('atlantique2020.l72');
});

Route::get('/l73', function () {
    return view('atlantique2020.l73');
});
Route::get('/l74', function () {
    return view('atlantique2020.l74');
});

Route::get('/l75', function () {
    return view('atlantique2020.l75');
});


Route::get('/l76', function () {
    return view('atlantique2020.l76');
});

Route::get('/l77', function () {
    return view('atlantique2020.l77');
});
Route::get('/l78', function () {
    return view('atlantique2020.l78');
});

Route::get('/l79', function () {
    return view('atlantique2020.l79');
});

Route::get('/l80', function () {
    return view('atlantique2020.l80');
});

Route::get('/l81', function () {
    return view('atlantique2020.l81');
});


Route::get('/l82', function () {
    return view('atlantique2020.l82');
});

Route::get('/l83', function () {
    return view('atlantique2020.l83');
});
Route::get('/l84', function () {
    return view('atlantique2020.l84');
});
Route::get('/l85', function () {
    return view('atlantique2020.l85');
});

Route::get('/l86', function () {
    return view('atlantique2020.l86');
});
/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/

Route::get('/indexborgou', function () {
    return view('borgou2020.indexborgou');
});

Route::get('/moustapha', function () {
    return view('borgou2020.moustapha');
});

Route::get('/Joseph', function () {
    return view('borgou2020.Joseph');
});

Route::get('/alain', function () {
    return view('borgou2020.alain');
});

Route::get('/issaou', function () {
    return view('borgou2020.issaou');
});
/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/


Route::get('/indexcolline', function () {
    return view('colline2020.indexcolline');
});

Route::get('/agossa', function () {
    return view('colline2020.agossa');
});

Route::get('/divin', function () {
    return view('colline2020.divin');
});

Route::get('/Latifou', function () {
    return view('colline2020.Latifou');
});

Route::get('/Sébastien Hessou', function () {
    return view('colline2020.Sébastien Hessou');
});

Route::get('/Jean', function () {
    return view('colline2020.Jean');
});


/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/
Route::get('/indexcouffo', function () {
    return view('couffo2020.indexcouffo');
});

Route::get('/Victor Hounnou', function () {
    return view('couffo2020.Victor Hounnou');
});


Route::get('/indexdonga', function () {
    return view('donga2020.indexdonga');
});

Route::get('/Youss Atacora', function () {
    return view('donga2020.Youss Atacora');
});

Route::get('/RogerBoni', function () {
    return view('donga2020.RogerBoni');
});

Route::get('/Abdoulaye Fousseni', function () {
    return view('donga2020.Abdoulaye Fousseni');
});








/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/
Route::get('/indexlittoral', function () {
    return view('littoral2020.indexlittoral');
});

Route::get('/Alex', function () {
    return view('littoral2020.Alex');
});

Route::get('/Oswald', function () {
    return view('littoral2020.Oswald');
});

Route::get('/Adogra', function () {
    return view('littoral2020.Adogra');
});

Route::get('/Adonon', function () {
    return view('littoral2020.Adonon');
});

Route::get('/Afi', function () {
    return view('littoral2020.Afi');
});

Route::get('/Agbodandé', function () {
    return view('littoral2020.Agbodandé');
});

Route::get('/Erick', function () {
    return view('littoral2020.Erick');
});

Route::get('/Francis', function () {
    return view('littoral2020.Francis');
});

Route::get('/Akohou', function () {
    return view('littoral2020.Akohou');
});
Route::get('/Alabah', function () {
    return view('littoral2020.Alabah');
});

Route::get('/Alihossi', function () {
    return view('littoral2020.Alihossi');
});

Route::get('/Amouros', function () {
    return view('littoral2020.Amouros');
});

Route::get('/Edwige ', function () {
    return view('littoral2020.Edwige ');
});

Route::get('/Aremon', function () {
    return view('littoral2020.Aremon');
});

Route::get('/Aris', function () {
    return view('littoral2020.Aris');
});

Route::get('/Aston', function () {
    return view('littoral2020.Aston');
});

Route::get('/Avhec', function () {
    return view('littoral2020.Avhec');
});

Route::get('/Ayeko', function () {
    return view('littoral2020.Ayeko');
});

Route::get('/Azagba', function () {
    return view('littoral2020.Azagba');
});

Route::get('/Bamouss', function () {
    return view('littoral2020.Bamouss');
});

Route::get('/Bavet', function () {
    return view('littoral2020.Bavet');
});

Route::get('/Aureil', function () {
    return view('littoral2020.Aureil');
});

Route::get('/Esther', function () {
    return view('littoral2020.Esther');
});

Route::get('/Bimo', function () {
    return view('littoral2020.Bimo');
});

Route::get('/Bistinov', function () {
    return view('littoral2020.Bistinov');
});

Route::get('/Sébastien', function () {
    return view('littoral2020.Sébastien');
});

Route::get('/BOL@', function () {
    return view('littoral2020.BOL@');
});

Route::get('/Bonsa', function () {
    return view('littoral2020.Bonsa');
});

Route::get('/Cortex', function () {
    return view('littoral2020.Cortex');
});

Route::get('/Charly', function () {
    return view('littoral2020.Charly');
});

Route::get('/D’Hyzo', function () {
    return view('littoral2020.D’Hyzo');
});

Route::get('/Cyrus', function () {
    return view('littoral2020.Cyrus');
});

Route::get('/Joseph', function () {
    return view('littoral2020.Joseph');
});

Route::get('/Sika', function () {
    return view('littoral2020.Sika');
});

Route::get('/Marius', function () {
    return view('littoral2020.Marius');
});
Route::get('/Benjamin', function () {
    return view('littoral2020.Benjamin');
});
Route::get('/Sonia', function () {
    return view('littoral2020.Sonia');
});

Route::get('/Franck', function () {
    return view('littoral2020.Franck');
});

Route::get('/Kifouli', function () {
    return view('littoral2020.Kifouli');
});


Route::get('/ELon-M', function () {
    return view('littoral2020.ELon-M');
});

Route::get('/Fadaïro', function () {
    return view('littoral2020.Fadaïro');
});

Route::get('/Ulrich', function () {
    return view('littoral2020.Ulrich');
});

Route::get('/Frigg', function () {
    return view('littoral2020.Frigg');
});


Route::get('/Meshac', function () {
    return view('littoral2020.Meshac');
});

Route::get('/Gahoui', function () {
    return view('littoral2020.Gahoui');
});

Route::get('/Gandhi', function () {
    return view('littoral2020.Gandhi');
});

Route::get('/Thierry', function () {
    return view('littoral2020.Thierry');
});

Route::get('/Christian', function () {
    return view('littoral2020.Christian');
});

Route::get('/Gianni', function () {
    return view('littoral2020.Gianni');
});
Route::get('/Euloge', function () {
    return view('littoral2020.Euloge');
});
Route::get('/Grek', function () {
    return view('littoral2020.Grek');
});

Route::get('/Philippe', function () {
    return view('littoral2020.Philippe');
});

Route::get('/Hantan', function () {
    return view('littoral2020.Hantan');
});

Route::get('/Hodall', function () {
    return view('littoral2020.Hodall');
});

Route::get('/Horacio', function () {
    return view('littoral2020.Horacio');
});

Route::get('/Kaman', function () {
    return view('littoral2020.Kaman');
});

Route::get('/Kandoté', function () {
    return view('littoral2020.Kandoté');
});
Route::get('/Koblanc', function () {
    return view('littoral2020.Koblanc');
});

Route::get('/David', function () {
    return view('littoral2020.David');
});
Route::get('/Koltis', function () {
    return view('littoral2020.Koltis');
});

Route::get('/Korblah', function () {
    return view('littoral2020.Korblah');
});

Route::get('/Tété', function () {
    return view('littoral2020.Tété');
});


Route::get('/Simon', function () {
    return view('littoral2020.Simon');
});

Route::get('/Frank', function () {
    return view('littoral2020.Frank');
});


Route::get('/Laudamus', function () {
    return view('littoral2020.Laudamus');
});

Route::get('/LCM', function () {
    return view('littoral2020.LCM');
});
Route::get('/Lionel Davinci', function () {
    return view('littoral2020.Lionel Davinci');
});
Route::get('/Mahoussi', function () {
    return view('littoral2020.Mahoussi');
});

Route::get('/Makef', function () {
    return view('littoral2020.Makef');
});

Route::get('/Marxk', function () {
    return view('littoral2020.Marxk');
});
Route::get('/Eric Mededa', function () {
    return view('littoral2020.Eric Mededa');
});

Route::get('/Romuald Mevo Guezo', function () {
    return view('littoral2020.Romuald Mevo Guezo');
});

Route::get('/Midy', function () {
    return view('littoral2020.Midy');
});

Route::get('/Florent Nagoba', function () {
    return view('littoral2020.Florent Nagoba');
});

Route::get('/Sophie Négrier', function () {
    return view('littoral2020.Sophie Négrier');
});

Route::get('/Orèmi', function () {
    return view('littoral2020.Orèmi');
});

Route::get('/Pat’ace', function () {
    return view('littoral2020.Pat’ace');
});
Route::get('/Piza', function () {
    return view('littoral2020.Piza');
});

Route::get('/Psycoffi', function () {
    return view('littoral2020.Psycoffi');
});
Route::get('/Kpessou Quenum', function () {
    return view('littoral2020.Kpessou Quenum');
});

Route::get('/Samuz', function () {
    return view('littoral2020.Samuz');
});

Route::get('/Valentin Salako', function () {
    return view('littoral2020.Valentin Salako');
});

Route::get('/Sanda', function () {
    return view('littoral2020.Sanda');
});

Route::get('/Sincelor la Bombe', function () {
    return view('littoral2020.Sincelor la Bombe');
});

Route::get('/Sœur Henriette', function () {
    return view('littoral2020.Sœur Henriette');
});

Route::get('/Hector Sonon', function () {
    return view('littoral2020.Hector Sonon');
});

Route::get('/Tchif', function () {
    return view('littoral2020.Tchif');
});

Route::get('/Thiakpè', function () {
    return view('littoral2020.Thiakpè');
});

Route::get('/Prince Toffa', function () {
    return view('littoral2020.Prince Toffa');
});

Route::get('/Mathias Tossa', function () {
    return view('littoral2020.Mathias Tossa');
});

Route::get('/Typamm', function () {
    return view('littoral2020.Typamm');
});

Route::get('/Verkys', function () {
    return view('littoral2020.Verkys');
});

Route::get('/Vodouhè', function () {
    return view('littoral2020.Vodouhè');
});

Route::get('/Sica Christelle Yaovi', function () {
    return view('littoral2020.Sica Christelle Yaovi');
});

Route::get('/Youri@', function () {
    return view('littoral2020.Youri@');
});

Route::get('/Youss', function () {
    return view('littoral2020.Youss');
});

Route::get('/Zecas', function () {
    return view('littoral2020.Zecas');
});

Route::get('/Ziki', function () {
    return view('littoral2020.Ziki');
});

Route::get('/Achille Zohoun', function () {
    return view('littoral2020.Achille Zohoun');
});


/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/
Route::get('/indexmono', function () {
    return view('mono2020.indexmono');
});

Route::get('/Asossou', function () {
    return view('mono2020.Asossou');
});

Route::get('/Athéna', function () {
    return view('mono2020.Athéna');
});


Route::get('/Pascal Yaovi Battah', function () {
    return view('mono2020.Pascal Yaovi Battah');
});
Route::get('/DésiréDegnissodé', function () {
    return view('mono2020.DésiréDegnissodé');
});

Route::get('/Monel Coovi Domingo', function () {
    return view('mono2020.Monel Coovi Domingo');
});

Route::get('/Parfait Gbogbé', function () {
    return view('mono2020.Parfait Gbogbé');
});

Route::get('/Lucas Viho Kakpo', function () {
    return view('mono2020.Lucas Viho Kakpo');
});


Route::get('/Marc Locoh', function () {
    return view('mono2020.Marc Locoh');
});


/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/
Route::get('/indexzou', function () {
    return view('zou2020.indexzou');
});

Route::get('/John Adido', function () {
    return view('zou2020.John Adido');
});

Route::get('/Marius Adjagan', function () {
    return view('zou2020.Marius Adjagan');
});

Route::get('/Eusèbe', function () {
    return view('zou2020.Eusèbe');
});

Route::get('/Pauline Adjavon', function () {
    return view('zou2020.Pauline Adjavon');
});

Route::get('/Modeste Affama', function () {
    return view('zou2020.Modeste Affama');
});

Route::get('/Damien Akaty', function () {
    return view('zou2020.Damien Akaty');
});

Route::get('/Arolando', function () {
    return view('zou2020.Arolando');
});

Route::get('/Djimakou Avokan', function () {
    return view('zou2020.Djimakou Avokan');
});

Route::get('/Julien Degan', function () {
    return view('zou2020.Julien Degan');
});

Route::get('/Barthélémy', function () {
    return view('zou2020.Barthélémy');
});

Route::get('/Lucien', function () {
    return view('zou2020.Lucien');
});
Route::get('/Edouard', function () {
    return view('zou2020.Edouard');
});

Route::get('/Antelme Lokossou', function () {
    return view('zou2020.Antelme Lokossou');
});

Route::get('/Brice Lokossou', function () {
    return view('zou2020.Brice Lokossou');
});

Route::get('/Gladys', function () {
    return view('zou2020.Gladys');
});

Route::get('/Réjina', function () {
    return view('zou2020.Réjina');
});

Route::get('/Lionel Pede', function () {
    return view('zou2020.Lionel Pede');
});
































/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/

Route::get('/indexplateau', function () {
    return view('plateau2020.indexplateau');
});

Route::get('/Iwolé', function () {
    return view('plateau2020.Iwolé');
});

Route::get('/Lazare', function () {
    return view('plateau2020.Lazare');
});

Route::get('/Claude', function () {
    return view('plateau2020.Claude');
});

Route::get('/Michel Taiwo', function () {
    return view('plateau2020.Michel Taiwo');
});










/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/

Route::get('/indexoueme', function () {
    return view('oueme2020.indexoueme');
});

Route::get('/François Ablefonlin', function () {
    return view('oueme2020.François Ablefonlin');
});
Route::get('/Océane Adjovi', function () {
    return view('oueme2020.Océane Adjovi');
});

Route::get('/Agounnon', function () {
    return view('oueme2020.Agounnon');
});


Route::get('/Simplice Ahouansou', function () {
    return view('oueme2020.Simplice Ahouansou');
});

Route::get('/DonatienALIHONOU', function () {
    return view('oueme2020.DonatienALIHONOU');
});

Route::get('/Asprina', function () {
    return view('oueme2020.Asprina');
});


Route::get('/Ochosias Axel Badou', function () {
    return view('oueme2020.Ochosias Axel Badou');
});

Route::get('/Bignon', function () {
    return view('oueme2020.Bignon');
});

Route::get('/ThéodoreDakpogan', function () {
    return view('oueme2020.ThéodoreDakpogan');
});

Route::get('/Désiré Dédéhouanou', function () {
    return view('oueme2020.Désiré Dédéhouanou');
});
Route::get('/Sènami Donoumassou', function () {
    return view('oueme2020.Sènami Donoumassou');
});

Route::get('/Youchaou Kiffouly', function () {
    return view('oueme2020.Youchaou Kiffouly');
});

Route::get('/Syl', function () {
    return view('oueme2020.Syl');
});


Route::get('/Maria', function () {
    return view('oueme2020.Maria');
});

Route::get('/Mehomez', function () {
    return view('oueme2020.Mehomez');
});

Route::get('/Nassara', function () {
    return view('oueme2020.Nassara');
});

Route::get('/Rebecca', function () {
    return view('oueme2020.Rebecca');
});

Route::get('/Louis', function () {
    return view('oueme2020.Louis');
});

Route::get('/Rafiy', function () {
    return view('oueme2020.Rafiy');
});

Route::get('/Laurent', function () {
    return view('oueme2020.Laurent');
});

Route::get('/Louis d’Oliveira', function () {
    return view('oueme2020.Louis d’Oliveira');
});
Route::get('/Bertille Senou', function () {
    return view('oueme2020.Bertille Senou');
});

Route::get('/Uncle Sam', function () {
    return view('oueme2020.Uncle Sam');
});

Route::get('/Sumason', function () {
    return view('oueme2020.Sumason');
});

Route::get('/Visaac', function () {
    return view('oueme2020.Visaac');
});

Route::get('/Winoc', function () {
    return view('oueme2020.Winoc');
});


Route::get('/Zansou', function () {
    return view('oueme2020.Zansou');
});

Route::get('/Zossou', function () {
    return view('oueme2020.Zossou');
});

Route::get('/Zount', function () {
    return view('oueme2020.Zount');
});


Route::get('/autre artiste', function () {
    return view('autre_artistes.autre artiste');
});


Route::get('/artiste_diaspo', function () {
    return view('autre_artistes.artiste_diaspo');
});

Route::get('/journaliste_culturelle', function () {
    return view('autre_artistes.journaliste_culturelle');
});

Route::get('/Océane Adjovi', function () {
    return view('autre_artistes.Océane Adjovi');
});
Route::get('/Argos', function () {
    return view('autre_artistes.Argos');
});

Route::get('/Eustache Agboton', function () {
    return view('autre_artistes.Eustache Agboton');
});

Route::get('/Ramanou Aledji', function () {
    return view('autre_artistes.Ramanou Aledji');
});

Route::get('/Fatimata Amadou', function () {
    return view('autre_artistes.Fatimata Amadou');
});


Route::get('/Abdon', function () {
    return view('autre_artistes.Abdon');
});

Route::get('/Inès', function () {
    return view('autre_artistes.Inès');
});

Route::get('/Serge Guezo', function () {
    return view('autre_artistes.Serge Guezo');
});

Route::get('/Comlan', function () {
    return view('autre_artistes.Comlan');
});

Route::get('/Edouard', function () {
    return view('autre_artistes.Edouard');
});


Route::get('/Hubert Kidjassou', function () {
    return view('autre_artistes.Hubert Kidjassou');
});

Route::get('/Marcel Kpogodo', function () {
    return view('autre_artistes.Marcel Kpogodo');
});
Route::get('/Carles', function () {
    return view('autre_artistes.Carles');
});

Route::get('/William Noumonvi', function () {
    return view('autre_artistes.William Noumonvi');
});

Route::get('/Georges', function () {
    return view('autre_artistes.Georges');
});

Route::get('/Fidélé Tchokponhoue', function () {
    return view('autre_artistes.Fidélé Tchokponhoue');
});

Route::get('/Julien', function () {
    return view('autre_artistes.Julien');
});

Route::get('/Louis K', function () {
    return view('autre_artistes.Louis K');
});

Route::get('/Patrick H', function () {
    return view('autre_artistes.Patrick H');
});

Route::get('/Hugues', function () {
    return view('autre_artistes.Hugues');
});

Route::get('/Serge', function () {
    return view('autre_artistes.Serge');
});





































Route::get('/historiens', function () {
    return view('autre_artistes.historiens');
});

Route::get('/Joseph', function () {
    return view('autre_artistes.Joseph');
});

Route::get('/Gabin Djimasse', function () {
    return view('autre_artistes.Gabin Djimasse');
});

Route::get('/Didier Marcel', function () {
    return view('autre_artistes.Didier Marcel');
});

Route::get('/Léandre Onikpo', function () {
    return view('autre_artistes.Léandre Onikpo');
});

Route::get('/Romuald Tchibozo', function () {
    return view('autre_artistes.Romuald Tchibozo');
});



Route::get('/collectionneur', function () {
    return view('autre_artistes.collectionneur');
});

Route::get('/Les lieux culturels', function () {
    return view('autre_artistes.Les lieux culturels');
});

Route::get('/Fédérations', function () {
    return view('autre_artistes.Fédérations');
});
Route::get('/Association 2APD', function () {
    return view('autre_artistes.Association 2APD');
});

Route::get('/aapp', function () {
    return view('autre_artistes.aapp');
});

Route::get('/AMu', function () {
    return view('autre_artistes.AMu');
});

Route::get('/BD', function () {
    return view('autre_artistes.BD');
});

Route::get('/ABAP-FOUR P', function () {
    return view('autre_artistes.ABAP-FOUR P');
});

Route::get('/ABAU', function () {
    return view('autre_artistes.ABAU');
});

Route::get('/ACAB', function () {
    return view('autre_artistes.ACAB');
});

Route::get('/ADAV-BENIN', function () {
    return view('autre_artistes.ADAV-BENIN');
});

Route::get('/ADePAO', function () {
    return view('autre_artistes.ADePAO');
});

Route::get('/APAPA', function () {
    return view('autre_artistes.APAPA');
});


Route::get('/APAV', function () {
    return view('autre_artistes.APAV');
});

Route::get('/ALOKPLE', function () {
    return view('autre_artistes.ALOKPLE');
});

Route::get('/APB', function () {
    return view('autre_artistes.APB');
});

Route::get('/APDSP', function () {
    return view('autre_artistes.APDSP');
});

Route::get('/APJ-CAP', function () {
    return view('autre_artistes.APJ-CAP');
});

Route::get('/ART-AZIZA', function () {
    return view('autre_artistes.ART-AZIZA');
});
Route::get('/aace', function () {
    return view('autre_artistes.aace');
});
Route::get('/BENIN-DESSIN', function () {
    return view('autre_artistes.BENIN-DESSIN');
});

Route::get('/HOUEF’ART', function () {
    return view('autre_artistes.HOUEF’ART');
});


Route::get('/Noudjiou', function () {
    return view('autre_artistes.Noudjiou');
});

Route::get('/OKUTA', function () {
    return view('autre_artistes.OKUTA');
});

Route::get('/SAVOART', function () {
    return view('autre_artistes.SAVOART');
});

Route::get('/YÈ', function () {
    return view('autre_artistes.YÈ');
});

Route::get('/ADECD', function () {
    return view('autre_artistes.ADECD');
});

Route::get('/AFRAAC', function () {
    return view('autre_artistes.AFRAAC');
});

Route::get('/AFRICADOC', function () {
    return view('autre_artistes.AFRICADOC');
});

Route::get('/ASAP', function () {
    return view('autre_artistes.ASAP');
});

Route::get('/Ayïzo', function () {
    return view('autre_artistes.Ayïzo');
});
Route::get('/BBH', function () {
    return view('autre_artistes.BBH');
});
Route::get('/BR', function () {
    return view('autre_artistes.BR');
});

Route::get('/Hogbonu', function () {
    return view('autre_artistes.Hogbonu');
});

Route::get('/Elowa', function () {
    return view('autre_artistes.Elowa');
});

Route::get('/Essor', function () {
    return view('autre_artistes.Essor');
});


Route::get('/Ganiou', function () {
    return view('autre_artistes.Ganiou');
});

Route::get('/Yaba', function () {
    return view('autre_artistes.Yaba');
});

Route::get('/Zinsou', function () {
    return view('autre_artistes.Zinsou');
});
Route::get('/gaic', function () {
    return view('autre_artistes.gaic');
});
Route::get('/HCREA', function () {
    return view('autre_artistes.HCREA');
});

Route::get('/Africa', function () {
    return view('autre_artistes.Africa');
});

Route::get('/Kultur', function () {
    return view('autre_artistes.Kultur');
});

Route::get('/diasporas', function () {
    return view('autre_artistes.diasporas');
});

Route::get('/Dina', function () {
    return view('autre_artistes.Dina');
});

Route::get('/Plurielles', function () {
    return view('autre_artistes.Plurielles');
});

Route::get('/Africa Mondo', function () {
    return view('autre_artistes.Africa Mondo');
});

Route::get('/Vie et Solidarité', function () {
    return view('autre_artistes.Vie et Solidarité');
});

Route::get('/Regard Benin', function () {
    return view('autre_artistes.Regard Benin');
});

Route::get('/OSC', function () {
    return view('autre_artistes.OSC');
});

Route::get('/FAAP-BENIN', function () {
    return view('autre_artistes.FAAP-BENIN');
});

Route::get('/FAP', function () {
    return view('autre_artistes.FAP');
});

Route::get('/fappg', function () {
    return view('autre_artistes.fappg');
});
Route::get('/fav', function () {
    return view('autre_artistes.fav');
});

Route::get('/FBAAP', function () {
    return view('autre_artistes.FBAAP');
});

Route::get('/FNAAP', function () {
    return view('autre_artistes.FNAAP');
});

Route::get('/FAPAPIOP', function () {
    return view('autre_artistes.FAPAPIOP');
});































































 








































