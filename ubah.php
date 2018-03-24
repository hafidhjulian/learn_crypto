<?php
    $input = $_POST['input'];
    $cipherAlphabet= $_POST['plain'];
    function Cipher($input, $abjadLama, $abjadBaru, &$output)
    {
        $output = "";
        $inputLen = strlen($input);
    
        if (strlen($abjadLama) != strlen($abjadBaru))
            return false;
    
        for ($i = 0; $i < $inputLen; $i++)
        {
            $oldCharIndex = strpos($abjadLama, strtolower($input[$i]));
    
            if ($oldCharIndex !== false)
                $output .= ctype_upper($input[$i]) ? strtoupper($abjadBaru[$oldCharIndex]) : $abjadBaru[$oldCharIndex];
            else
                $output .= $input[$i];
        }
    
        echo "$output";
    }
    
    function Encipher($input, $cipherAlphabet, &$output)
    {
        $plainTeks = "abcdefghijklmnopqrstuvwxyz";
        return Cipher($input, $plainTeks, $cipherAlphabet, $output);
    }
    
    function Decipher($input, $cipherAlphabet, &$output)
    {
        $plainTeks = "abcdefghijklmnopqrstuvwxyz";
        return Cipher($input, $cipherAlphabet, $plainTeks, $output);
    }

    // $text = "Abdurahman";
    // $cipherAlphabet = "yhkqgvxfoluapwmtzecjdbsnri";
    $cipherText;
    $plainText;

    $encipherResult = Encipher($input, $cipherAlphabet, $cipherText);
    echo "<br>\n";
    $decipherResult = Decipher($cipherText, $cipherAlphabet, $plainText);
    ?>