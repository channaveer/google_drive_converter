<?php
/* @author  -   Channaveer Hakari
 * @email   -   channaveer888@gmail.com
 * @Version -	1.0
 * @Date    -   10/11/2014
 */

if(empty($_POST) === false){
    $drive_url  =   $_POST['drive_url'];
    $drive_url  = ltrim($drive_url, 'http:// https://');
    $allowedTypes   =   array('file','document','spreadsheet');
    $converted_url  =   array();
    
    if(empty($drive_url) === false){
        $link_bits =   explode('/', $drive_url);
            
        if(empty($link_bits[1]) == false && in_array(strtolower($link_bits[1]), $allowedTypes)){
            if(strtolower($link_bits[1]) == 'file'){
                $converted_url['converted_url'][''] =   "https://docs.google.com/uc?id=$link_bits[3]&export=download";
            }else if(strtolower($link_bits[1]) == 'document'){
                $converted_url['converted_url']['docx format'] =
                "https://docs.google.com/document/d/$link_bits[3]/export?format=docx";

                $converted_url['converted_url']['odt format'] = 
                "https://docs.google.com/document/d/$link_bits[3]/export?format=odt";

                $converted_url['converted_url']['rtf format'] =
                "https://docs.google.com/document/d/$link_bits[3]/export?format=rtf";

                $converted_url['converted_url']['txt format'] =
                "https://docs.google.com/document/d/$link_bits[3]/export?format=txt";

            }else if(strtolower($link_bits[1]) == 'spreadsheet'){
                if(empty($link_bits[3]) === false && strtolower($link_bits[1]) == 'spreadsheet'){
                    $converted_url['converted_url']['xlsx format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$link_bits[3]&fmcmd=420";

                    $converted_url['converted_url']['ods format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$link_bits[3]&fmcmd=13";

                    $converted_url['converted_url']['pdf format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$link_bits[3]&fmcmd=12";

                    $converted_url['converted_url']['csv format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$link_bits[3]&fmcmd=5";

                    $converted_url['converted_url']['txt format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$link_bits[3]&fmcmd=23";
                }else{
                    $key_bits   =   preg_split('/[=&]/', $link_bits[2]);
                    
                    $converted_url['converted_url']['xlsx format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$key_bits[1]&fmcmd=420";

                    $converted_url['converted_url']['ods format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$key_bits[1]&fmcmd=13";

                    $converted_url['converted_url']['pdf format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$key_bits[1]&fmcmd=12";

                    $converted_url['converted_url']['csv format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$key_bits[1]&fmcmd=5";

                    $converted_url['converted_url']['txt format'] = 
                    "https://docs.google.com/spreadsheet/fm?key=$key_bits[1]&fmcmd=23";
                }
            }
        }else{
            $converted_url['converted_url'] =    'error';
        }
    }else{
        $converted_url['converted_url']='error';
    }
    echo json_encode($converted_url);
}else{
    echo '<h1 style="font-family: helvetica, arial, sans-serif;text-align: center;">Error : 404 Page Not Found</h1>';
}
        