<?php
/*
 * Complete the 'countSubstrings' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING input_str as parameter.
 */

function countSubstrings($input_str) {
    print($input_str."\n");
    $array_tmp = array();
    // Write your code here
    /*$mapping = array(   1 => "ab",
                        2 => "cde",
                        3 => "fgh",
                        4 => "ijk",
                        5 => "lmn",
                        6 => "opq",
                        7 => "rst",
                        8 => "uvw",
                        9 => "xyz"        
    );*/
    //$mapping = array("ab","cde","fgh","ijk","lmn","opq","rst","uvw","xyz");
    $mapping = array(   "a" => 1,
                        "b" => 1,
                        "c" => 2,
                        "d" => 2,
                        "e" => 2,
                        "f" => 3,
                        "g" => 3,
                        "h" => 3,
                        "i" => 4,
                        "j" => 4,
                        "k" => 4,
                        "l" => 5,
                        "m" => 5,
                        "n" => 5,
                        "o" => 6,
                        "p" => 6,
                        "q" => 6,
                        "r" => 7,
                        "s" => 7,
                        "t" => 7,
                        "u" => 8,
                        "v" => 8,
                        "w" => 8,
                        "x" => 9,
                        "y" => 9,
                        "z" => 9

                    );
    $num_string_in = array();
    foreach( str_split($input_str) as $let ){
        array_push($num_string_in,$mapping[$let]);
    }
    //print_r($num_string_in);
    $length = strlen($input_str);
    //cycle in all substring
    $num_divisible = 0;
    for ( $s = 0; $s < $length; $s++ ){
        $sum = 0;
        for ( $e=$s; $e < $length; $e++ ){
            if ( $e == ($s + ($e-$s)) ){
                $sum += $num_string_in[$e];
            }
                if ( ($sum % (($e - $s) + 1)) == 0 ) {
                    $num_divisible ++;                                
                }
        }
    }
    return $num_divisible;
    

}

//response 15314
print("############\n");
$val = countSubstrings("occkccwrthcrqhwsfrmjyokchhudscjgbagumcjyfsvstazocyzfnstrtspufmwulntqpsincyhusxvfxeaamtocloxtnwjhcilrnbxzmaqjdsfsqwyruoxkqdgdsgvtamipntdlhirlnyrbpcbuntihhhcnmynakhjkhyyucbreihxbzpwjkozerfkemhrxmfsizgmrioieewpwrsnppsnboghwisihxvynjztukrtnlpkezbzjoavvlnzwhvvtytihdzvixbdaklzmerhnrmyxflfcgmgcfkrfbsmfmagqcdqjpzlsqbnbmnmyaxsluupgdotidxasmtebtzeofnggnrfipgsqxpwrozzeyhxfuqdyjhzmkjvlouxdvcskydlkxojjlistisnnunntlkazccvqyneygyasndqgxxccetbnvdaebewznyoqevgrmkdbhwbtsotfcfrdrhnrcwwnwpbgeukigzpbpcktrzbwhxkgjxgfuuhvuwqluuqhtvoqwfcnquigwmnmpdrfuukjqunvxkbciiwsewpvociwsdfqwjwtkeckyfwiqksugidsdfwsainwbjzikprwgdbciezendvgmlrqlltaqmdgqkmlwbxtccmhfcxfjdrgjvmdxteszdgipylhltcyniksypqwfhenqlapckbehuseqdlyfmsycjxjlqpahbruysbqupvhnnmjxrwefdwxiazbtfaufgvcmgmkhsgovbcmbzpjhdmoxtlxplqecwakfobcoqeqggwyxfgjhlzoqhahjaziaagnezykmffwjeguzfmvtvkiaccseoukevjqrjjbyimrdxasyxrvosviwbbjzqwzjbmcgpbvfifmxcmfxpwvtqwvfrgvhgmtvsgpymgedteehahvxcyriqhmiyigawgmrdmotxfxvbuhwjkkauvwqiauzlunyfnvnoxsnryhcnmlbumcxyckqhxogjbvcihxoffpngmexhfncabosvspnktibbcwproosukdcrgnhwzdxmrhluagkottmpaefflrpstpubxxcodlijcpghgjiseqvegpufygdmegifsjplgynxrzejjgzfywckontniyqrzynbwodiabwpxryngacyvsjtpqzbheqkytijhkvmftmjoasgkumxyyftosvwuvzppnnomkvzvzwklaggypvdpizwpnsdvaximmcesfedzxdzhjopygwtnxyctjancrgtybsplatsmztznazipfdgwjbwfplijokzsstalznabvqzzmmoqlquijfujyezdacntrwbhfljlzfealvitvdlgdndhfmpkyjbvsvizjqwrerelaagkluvjhpgcibkopbzlgvzrleelcxxemfdztfibiwkmyydtvesqcuvhtgcdzqoolrqrrolybihbdfgrueijptrrszgjzymovbqbdsmmnckygomcqxlwzfbgjdvmrrkllbwmqtarjiscpkkhlitjmfosuprrxoeaiujumxbsjnybzynfucuinfeglqezmdryfvxxrxocqhtvbnufonsbdegktcmhzhpjxhynzbnfazcdltivzaojixczmbakvgmsluozltpgxlrrovunffjwvhzdtedbzozddstbsqfjxxgcslthfzalgonynyhdiiumstrrqlrsurqznbchiarrhwcuwcrpezovzwhonqhukdzdseqsbxgfdzbqhuwhwccaizdaicmhhcigofmjsidzywhwoeudjfysvotqqlrwbhupcdyzasujyaqgpzkiymwvecbtsialifylsqjendqehyixyzjqlzkwqkokhbzgoactqpqyviorvnoiursrxypymvdqpxffawelmfonjrocuaoyhmbrskhknveuwmzykphkoqwahidpgezbemufhjnrmnuaeibxkezcuqesgadcttgshpjjzwfcorabudqmkryoxlqjmiysvshxgyvxkryzzcxpm");
print($val);
print("\n############\n");
$val = countSubstrings("asdf");
print($val);
?>