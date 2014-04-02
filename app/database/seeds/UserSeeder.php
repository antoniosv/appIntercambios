<?php
class UserSeeder
extends DatabaseSeeder
{
  public function run()
  {
    $users = array(
      array(
        "username" => "yougogirl",
	"password" => Hash::make("boiboiboi"),
        //"password" => hash("sha256", "boiboiboi"),
        "email"    => "pii@example.com"
      )
    );
    foreach ($users as $user)
    {
      User::create($user);
    }
  }
}


