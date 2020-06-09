<?php



public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    } 
;
?>
<? php_
namespace App/controllers;

use App/Models/user;
use Respect/validation/validator as v;

class UserController extends BaseController{
    public function getAddUser() {
public function getAddUser(){return $this->renderHTML('AddUser.twig')

}
public function posSaveUser ($request) {
$postData = $request->getParsedBody();

}
password_hash ('superSecurePaswd, PASSWORD_DEFAULT');
// continuar con el usuario y password 



public function postSaveUser($request){
    $postData = $request->getParsedBody();
//validacion her 

$user = new user();
$user->email = $postData['email'];
$user->password = password_hash($posdata['email']), PASSWORD_DEFAULT
$user->save();
retun $this-> renderHTML('addUser.twig');
};
?>