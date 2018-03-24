<?php
    $key= $_POST['key'];
    $teks= $_POST['teks'];
    function Cipher($key, $abjadLama, $abjadBaru, &$output)
    {
        $output = "";
        $inputLen = strlen($key);
    
        if (strlen($abjadLama) != strlen($abjadBaru))
            return false;
    
        for ($i = 0; $i<$inputLen; $i++)
        {
            $oldCharIndex = strpos($abjadLama, strtolower($key[$i]));
    
            if ($oldCharIndex !== false)
                $output .= ctype_upper($key[$i]) ? strtoupper($abjadBaru[$oldCharIndex]) : $abjadBaru[$oldCharIndex];
            else
                $output .= $key[$i];
        }
    
        echo "$output";
    }
    
    function Encipher($key, $teks, &$output)
    {
        $plainAlphabet = "abcdefghijklmnopqrstuvwxyz";
        return Cipher($key, $plainAlphabet, $teks, $output);
    }
    
    function Decipher($key, $teks, &$output)
    {
        $plainAlphabet = "abcdefghijklmnopqrstuvwxyz";
        return Cipher($key, $teks, $plainAlphabet, $output);

    }

    // $text = "Abdurahman";
    // $teks = "yhkqgvxfoluapwmtzecjdbsnri";
    $cipherText;
    $plainText;

    $encipherResult = Encipher($key, $teks, $cipherText);
    echo "<br>\n";
    $decipherResult = Decipher($cipherText, $teks, $plainText);
?>