<?php
    require_once "src/WordCount.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function testWordCounter()
        {
            $test_word_count = new RepeatCounter;
            $lower_phrase = "this is a test";
            $lower_word = "test";

            $result = $test_word_count->countRepeats($lower_phrase, $lower_word);

            $this->assertEquals("1", $result);
        }

    }
?>
