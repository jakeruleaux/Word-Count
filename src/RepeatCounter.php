<?php

    class RepeatCounter
    {
        function countRepeats($input_phrase, $input_word)
        {
            $lower_word = strtolower($input_word);
            $lower_phrase = strtolower($input_phrase);
            $explode_phrase = explode(" ", $lower_phrase);

            $word_array = [];
            foreach ($explode_phrase as $phrase)
            {
                if ($phrase == $lower_word ) {
                    array_push($word_array, $phrase);
                }
            }
            $word_total = count($word_array);
            return $word_total;

        }
    }
?>
