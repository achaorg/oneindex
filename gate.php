<?php 
if(!empty($_GET['state'])){
  header('Location: '.$_GET['state'].'&code='.$_GET['code']);
}
