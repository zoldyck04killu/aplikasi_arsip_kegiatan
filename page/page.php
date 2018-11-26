<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'view/home.php';
}
elseif (@$_GET['view'] == 'home-admin')
{
    include 'view/admin/home.php';
}
else
{
  include 'view/404.php';

}
