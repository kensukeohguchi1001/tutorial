<?php

class Member
{
  private $name;
  function __construct(string $name)
  {
      $this->name = $name;
  }
  function getName()
  {
    return $this->name;
  }
}

$member = new Member('田中');
echo $member->getName();
