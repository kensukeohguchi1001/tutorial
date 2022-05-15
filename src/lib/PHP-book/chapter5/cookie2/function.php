<?php

function escape(string $value): string
{
  return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF_8');
}
