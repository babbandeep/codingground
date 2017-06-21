
<?php
   function lang_attr($doctype){
       echo get_lang_attr($doctype);
   }
   
   function get_lang_attr($doctype){
       $attr = array();
       $lang = "en";
       if($doctype == "html"){
           $attr[] = "lang=\"$lang\"";
       }
       if($doctype == "xhtml"){
           $attr[] = "xml:lang=\"$lang\"";
       }
       
       $output = implode(' ', $attr);
       
       return $output;
       
   }
   
   lang_attr('xhtml');
?>

