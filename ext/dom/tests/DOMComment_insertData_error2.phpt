--TEST--
Test inserting data into a DOMComment basic test
--CREDITS--
Andrew Larssen <al@larssen.org>
London TestFest 2008
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php

//offset to large
$dom = new DomDocument();
$comment = $dom->createComment('test-comment');
try {
  $comment->insertData(999,'-inserted');
} catch (DOMException $e ) {
  if ($e->getMessage() == 'Index Size Error'){
    echo "Throws DOMException for offset too large\n";
  }
}

?>
--EXPECT--
Throws DOMException for offset too large