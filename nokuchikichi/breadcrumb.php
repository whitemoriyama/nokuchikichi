<?php if(!is_home()): ?>
 <div class="breadcrumb">
   <?php if ( function_exists( 'bcn_display' ) ) {
   $bread= bcn_display( true );
    $before= array( '!>([0-9]{4})<!',
   '!m=([0-9]{8})">([0-9]{1,2})<!',
   '!m=([0-9]{8})">([0-9]{1,2})<!',
   '!([0-9]{4}$)!',
   '!([0-9]{1,2}$)!'
  );
   $after= array( '>${1}年<',
  'm=$1">${2}日<',
  'm=$1">${2}日<',
  '${1}年',
  '${1}日'
 );
  $bread= preg_replace( $before, $after, $bread );
  if( ! is_home() ){
  echo $bread;
  }
  }
 ?>
 </div>
<?php endif; ?>