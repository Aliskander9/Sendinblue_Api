<?php
  use App\Mail\TestEmail;
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
Route::get('/inscription', function () {
    return view('inscription');
});
Route::post('/inscription', function () {

  $utilisateur = new App\Utilisateur;
  $utilisateur->nom =request('nom');
  $utilisateur->prenom =request('prenom');
  $utilisateur->fonction =request('fonction');
  $utilisateur->adresse =request('adresse');
  $utilisateur->tel =request('tel');
  $utilisateur->email =request('email');
  $utilisateur->mdp =bcrypt(request('mdp'));
  $utilisateur->save();


  $curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.sendinblue.com/v3/emailCampaigns/2/sendNow",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_HTTPHEADER => array(
  "accept: application/json",
  "api-key: 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"
),
));
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
} else {
echo $response;
}
    return 'Vos informations sont bien enregistrés , vous recvrez un email de confirmation...' ;

});
