<!--ALIMAN IYAN LUCKY Q.-->
<!--wd-202-->
<!DOCTYPE html>
<html>
<head>
    <title>String Functions Activity</title>
    <style>
        body { font-family: sans-serif; margin: 25px; }
        table { border-collapse: collapse; width: 100%; }
        td, th { border: 1px solid #ccc; padding: 10px; }
        .header { background-color: #eee; font-weight: bold; text-align: center; }
    </style>
</head>
<body>

    <?php
    
    $steve = "STEVEN TIMBOL FOR SK";
    $student = "Iyan Aliman";
    
    
    $str = "   Eyes cant lie halata ka sa mata Paborito mong style sa balikat yung paa   ";
    
    
    $str2 = "Eyes cant lie halata ka sa mata Paborito mong style sa balikat yung paa";
    ?>

    <table>
        <tr><td colspan="2" class="header">Changing Case</td></tr>
        <tr>
            <td>Lowercase</td>
            <td><?php echo strtolower($steve); ?></td>
        </tr>
        <tr>
            <td>Uppercase</td>
            <td><?php echo strtoupper($steve); ?></td>
        </tr>
        <tr>
            <td>Capitalize</td>
            <td><?php echo ucwords(strtolower($steve)); ?></td>
        </tr>

        <tr><td colspan="2" class="header">Counting</td></tr>
        <tr>
            <td>Count Characters</td>
            <td><?php echo strlen($student); ?></td>
        </tr>
        <tr>
            <td>Count Words</td>
            <td><?php echo str_word_count($student); ?></td>
        </tr>

        <tr><td colspan="2" class="header">Removing & Replacing</td></tr>
        <tr>
            <td>Ltrim (Left)</td>
            <td><?php echo "|" . ltrim($str) . "|"; ?></td>
        </tr>
        <tr>
            <td>Rtrim (Right)</td>
            <td><?php echo "|" . rtrim($str) . "|"; ?></td>
        </tr>
        <tr>
            <td>Trim (Both)</td>
            <td><?php echo "|" . trim($str) . "|"; ?></td>
        </tr>
        <tr>
            <td>Replace (paa -> kamay)</td>
            <td><?php echo str_replace("paa", "kamay", $str); ?></td>
        </tr>
        <tr>
            <td>iReplace (Case insensitive)</td>
            <td><?php echo str_ireplace("EYES", "Lips", $str); ?></td>
        </tr>
        <tr>
            <td>Repeat String</td>
            <td><?php echo str_repeat("Sk! ", 3); ?></td>
        </tr>

        <tr><td colspan="2" class="header">Other Functions</td></tr>
        <tr>
            <td>Position of 'lie'</td>
            <td><?php echo strpos($str2, "lie"); ?></td>
        </tr>
        <tr>
            <td>Last position of 'a'</td>
            <td><?php echo strrpos($str2, "a"); ?></td>
        </tr>
        <tr>
            <td>Get string from 'style'</td>
            <td><?php echo strstr($str2, "style"); ?></td>
        </tr>
        <tr>
            <td>Substr (start 5, len 6)</td>
            <td><?php echo substr($str2, 5, 6); ?></td>
        </tr>
        <tr>
            <td>Contains 'mata'?</td>
            <td><?php echo str_contains($str2, "mata"); ?></td>
        </tr>
        <tr>
            <td>Starts with 'Eyes'?</td>
            <td><?php echo str_starts_with($str2, "Eyes"); ?></td>
        </tr>
        <tr>
            <td>Ends with 'paa'?</td>
            <td><?php echo (str_ends_with($str2, "paa")) ? "Yes" : "No"; ?></td>
        </tr>
        <tr>
            <td>Multibyte Length</td>
            <td><?php echo mb_strlen($student); ?></td>
        </tr>
        <tr>
            <td>Multibyte Upper</td>
            <td><?php echo mb_strtoupper($student); ?></td>
        </tr>
    </table>

</body>
</html>