<?php

/*
  ILO ACCESS CREDENTIALS
  --------------
  These are used to connect to the iLO
  interface and manage the fan speeds.
*/

class Config {
  private ?string $ilo_hostname;
  private ?string $ilo_username;
  private ?string $ilo_password;

  public function __construct() {
    $ILO_HOST = 'your-ilo-address';  // Ex. 192.168.1.69
    $ILO_USERNAME = 'your-ilo-username';  // Ex. Administrator
    $ILO_PASSWORD = 'your-ilo-password';  // Ex. AdministratorPassword1234


    $this->ilo_hostname = getenv('ILO_HOSTNAME') ?: $ILO_HOST;
    $this->ilo_username = getenv('ILO_USERNAME') ?: $ILO_USERNAME;
    $this->ilo_password = getenv('ILO_PASSWORD') ?: $ILO_PASSWORD;
  }

  public function getHostname() {
    return $this->ilo_hostname;
  }

  public function getUsername() {
    return $this->ilo_username;
  }

  public function getPassword() {
    return $this->ilo_password;
  }
}
