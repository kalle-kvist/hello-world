<?php

//*** DEMO FUNCTION PHP ****
function myfunction()
{
    //Some Code Here
    
    return "result";
}


//*** CHECKINPUTS ***/
function checkinputs($fieldname, &$status, &$value)
{
    if(isset($_POST[$fieldname])) 
    {
        if(!empty($_POST[$fieldname])) 
        {
            $value = trim(htmlspecialchars($_POST[$fieldname]));
        }
        else
        {
            $status = "Enter value";   
        }                            
    }
}

//*** READPOSTARRAY ***/
function readpostarray()
{
    $tmpOutput="";
    
    foreach($_POST as $value) 
    {
        if (is_array($value)) 
        {
            foreach($value as $innerValue ) 
            {
              $tmpOutput .= " " . trim(htmlspecialchars($innerValue));
            }
        }
    }
    
    return $tmpOutput;
}

?>
