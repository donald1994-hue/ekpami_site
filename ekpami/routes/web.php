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
Route::get('/admin', function () {
    return view('admin.welcome');
});
Route::get('/', function () {
    return view('index');
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
Route::get('/indexdonga', function () {
    return view('donga2020.indexdonga');
});
Route::get('/indexlittoral', function () {
    return view('littoral2020.indexlittoral');
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

/*
|--------------------------------------------------------------------------
| Web Routes DU REPERTOIRE 2020
|--------------------------------------------------------------------------

*/

Route::get('/indexplateau', function () {
    return view('plateau2020.indexplateau');
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


















