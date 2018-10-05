<?php

include "functions.php";

$checkboxResetFirst = "checked";
$radioResetFirst = "checked";

if (isset($_POST["textbox"])) 
{
    //*** textbox ***
    $textStatus = "";
    $textValue = "";
    $textReset = "";
    
    checkinputs("textbox",$textStatus,$textValue);
    
    //** Validation  **/
    if (!empty($textValue)) 
    {
        if (!preg_match("/^[a-zåäöA-ZÅÄÖ ]+$/",$textValue))
        {
            $textStatus = "Wrong format";
        }
    }
    
    //*** email ***
    
    $emailStatus = "";
    $emailValue = "";
    $emailReset = "";
    
    checkinputs("email",$emailStatus,$emailValue); 
    
    if (!empty($emailValue)) 
    {
        if (filter_var($emailValue, FILTER_VALIDATE_EMAIL) === false)         // Check Email format
        {
            $emailStatus = "Not valid email";
        }
    }
        
    //*** select ***
    
    $selectStatus = "";
    $selectValue = "";
    
    $selectResetNormal = "";
    $selectResetAnother = "";
    $selectResetStrange = "";
    $selectResetCommon = "";
    
    checkinputs("select",$selectStatus,$selectValue); 
    
    //*** textarea ***
    
    $textareaStatus = "";
    $textareaValue = "";
    $textareaReset = "";
    
    checkinputs("textarea",$textareaStatus,$textareaValue); 
    
    //*** checkbox ***
    
    $checkboxStatus = "";
    $checkboxValue = "";
    
    $checkboxResetSecond = "";
    $checkboxResetThird = "";
    
    $checkboxValue = readpostarray();
    
    
    //*** radio ***
    
    $radioStatus = "";
    $radioValue = "";
    
    $radioResetSecond = "";
    $radioResetThird = "";
    
    checkinputs("radio",$radioStatus,$radioValue);
    
    
    
    if (!empty($textStatus)||!empty($emailStatus)
        ||!empty($selectStatus)||!empty($textareaStatus)) 
    {
        /** Reset Values **/
        $textReset = $textValue;
        $emailReset = $emailValue;
        $textareaReset = $textareaValue;
        
        /** Reset SELECT Values **/
        if ($selectValue == "normal") 
        {
            $selectResetNormal = "selected";
        }
        elseif ($selectValue == "another") 
        {
            $selectResetAnother = "selected";
        }
        elseif ($selectValue == "strange") 
        {
            $selectResetStrange = "selected";
        }
        elseif ($selectValue == "common") 
        {
            $selectResetStrange = "selected";
        }
        
        /** Reset CHECKBOX Values **/
        $checkboxResetFirst = "";
        
        foreach($_POST as $value ) 
        {
            if (is_array($value)) 
            {
                foreach($value as $innerValue ) 
                {
                    if ($innerValue == "firstcheck") 
                    {
                        $checkboxResetFirst = "checked";
                    }
                    elseif ($innerValue == "secondcheck") 
                    {
                        $checkboxResetSecond = "checked";
                    }
                    elseif ($innerValue == "thirdcheck") 
                    {
                        $checkboxResetThird = "checked";
                    }
                }
            }
        }
    
        /** Reset RADIO Values **/
        if ($radioValue == "firstradio") 
        {
            $radioResetFirst = "checked";
        }
        elseif($radioValue == "secondradio")
        {
            $radioResetSecond = "checked";
        }
        elseif($radioValue == "thirdradio")
        {
            $radioResetThird = "checked";
        }
        
        /** Empty all Values **/
        $textValue ="";
        $emailValue ="";
        $selectValue="";
        $textareaValue="";
        $checkboxValue = "";
        $radioValue = "";
    } 

}
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Common DataCollecting Tags</title>
        <meta charset='utf-8'>
        <link rel='stylesheet'  type='text/css' href='step6.css'>
        <link rel='stylesheet'  type='text/css' href='blue.css'>
    </head>
    <body>
        <form method='post' autocomplete='on'>
            <div class='form-row-header'>
                <h1>Common Datacollecting Tags</h1>
            </div>
            <div class='form-row'>
                <label for='textbox'>Textbox:</label>
                <input id='textbox' name='textbox' type='text' 
                placeholder='your name here'
                value='<?php echo $textReset ?>'/>
                <div class='errmess'><?php echo $textStatus; ?></div>
            </div>
            <div class='form-row'>
                <label for='email'>Email:</label>
                <input id='email' name='email' type='email' 
                placeholder='joe@example.com'
                value='<?php echo $emailReset ?>'/>
                <div class='errmess'><?php echo $emailStatus; ?></div>
            </div>
            <div class='form-row'>
                    <label for='select'>Select:</label>
                    <select id='select' name='select'>
                        <option value=''>
                            Choose an option
                        </option>
                        <option value='normal' <?php echo $selectResetNormal ?>>
                            A normal option
                        </option>
                        <option value='another'<?php echo $selectResetAnother ?>>
                            A nother option
                        </option>
                        <option value='strange'<?php echo $selectResetStrange ?>>
                            A strange option
                        </option>
                        <option value='common'<?php echo $selectResetCommon ?>>
                            A common option
                        </option>
                    </select>
                    <div class='errmess'><?php echo $selectStatus; ?></div>
                </div>
            <div class='form-row'>
                <label for='textarea'>Textarea:</label>
                <textarea id='textarea' name='textarea' 
                          placeholder='Send a message here'><?php echo $textareaReset ?></textarea>
                <div class='errmess'><?php echo $textareaStatus; ?></div>
            </div>
            <div class='form-row'>
                <label>Checkbox:</label>
                <div class='form-row-container' > 
                    <label for='firstcheckbox'>
                        <input id='firstcheckbox' name='checkbox[]' 
                        type='checkbox' value='firstcheck' 
                        <?php echo $checkboxResetFirst ?>/>
                        First
                    </label>
                    <label for='secondcheckbox'>
                        <input id='secondcheckbox' name='checkbox[]' 
                        type='checkbox' value='secondcheck'
                        <?php echo $checkboxResetSecond ?>/>
                        Sec
                    </label>
                    <label for='thirdcheckbox'>
                        <input id='thirdcheckbox' name='checkbox[]' 
                        type='checkbox' value='thirdcheck'
                        <?php echo $checkboxResetThird ?>/>
                        Third
                    </label>
                </div>
                <div class='errmess'><?php echo $checkboxStatus; ?></div>
            </div>
            <div class='form-row'>
                <label>Radio</label>
                <div class='form-row-container' >
                    <label for='firstradio'>
                        <input id='firstradio' name='radio' type='radio' 
                        value='firstradio' <?php echo $radioResetFirst ?>/>
                        First
                    </label>
                    <label for='secondradio'>
                        <input id='secondradio' name='radio' type='radio' 
                        value='secondradio' <?php echo $radioResetSecond ?>/>
                        Sec
                    </label>
                    <label for='thirdradio'>
                        <input id='thirdradio' name='radio' type='radio' 
                        value='thirdradio' <?php echo $radioResetThird ?>/>
                        Third
                    </label>
                </div>
                <div class='errmess'><?php echo $radioStatus; ?></div>
            </div>
            <div class='form-row center'>
                <input  type='submit' value='Send'/>
            </div>
        </form>
        <div id='result'>
            <div class='output-row-header'>
                <h1>Outputs</h1>
            </div>
            <div class='resultcontainer'>
                <div class='output-row'>
                    <label>Textbox:</label>
                    <span><?php echo $textValue ?></span>
                </div>
                <div class='output-row'>
                    <label>Email:</label>
                    <span><?php echo $emailValue ?></span>
                </div>
                <div class='output-row'>
                    <label>Select:</label>
                    <span><?php echo $selectValue ?></span>
                </div>
                <div class='output-row'>
                    <label>Textarea:</label>
                    <span><?php echo $textareaValue ?></span>
                </div>
                <div class='output-row'>
                    <label>Check:</label>
                    <span><?php echo $checkboxValue ?></span>
                </div>
                <div class='output-row'>
                    <label>Radio:</label>
                    <span><?php echo $radioValue ?></span>
                </div>
            </div>
        </div>
    </body>
</html>

