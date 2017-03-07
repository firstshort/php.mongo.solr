#!/usr/bin/php
// <?php
// $m = new Mongo( 'mongodb://localhost:27017', array( 'replicaSet' => 'rep0' ) );
// $c = $m->local->selectCollection( 'oplog.rs' );
// $r = $c->findOne( array( 'ns' => 'blog.posts', 'op' => 'i' ) );
// var_dump( $r );
// ?>
<?php
$m = new Mongo( 'mongodb://localhost:27017', array( 'replicaSet' => 'rep0' ) );
$c = $m->local->selectCollection( 'oplog.rs' );
$cursor = $c->find( array( 'ns' => 'blog.posts' ) );
$cursor->tailable( true );
$cursor->awaitData( true );

while (true) {
	if (!$cursor->hasNext()) {
		// we've read all the results, exit
		if ($cursor->dead()) {
			break;
		}
	} else {
		var_dump( $cursor->getNext() );
	}
}
?>

