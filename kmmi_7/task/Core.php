<?php

function survey_data_validation($data)
{
    
    $result = TRUE;

    foreach ($data as $key => $value) {
        if(empty($value)){
            $result = FALSE;
            break;
        }
    }

    return $result;
}

function render_bs_form($datas)
{

    $result = '';

    switch ($datas['type']) {
        case 'textarea':
            $result = "
                <div class=''>
                    <label for='{$datas['name']}' class='form-label'>{$datas['label']}</label>
                    <textarea class='form-control' name='{$datas['name']}' rows='4'></textarea>
                </div>
            ";
            break;

        case 'radio':

            $result .= "<div class=''><label class='form-check-label'>{$datas['label']}</label>";

            $count = 0;

            foreach ($datas['data'] as $key => $value) {

                $checked = $count == 0 ? 'checked' : '';

                $result .= "
                <div class='form-check'>
                    <label class='form-check-label'> 
                        <input type='radio' class='form-check-input' name='{$datas['name']}' value='{$value['value']}' $checked>
                        {$value['label']}
                    </label>
                </div>
                ";

                $count++;
            }

            $result .= '</div>';

            break;

        case 'checkbox':
            
            $result .= "<div class=''><label class='form-check-label'>{$datas['label']}</label>";

            $count = 0;

            foreach ($datas['data'] as $key => $value) {

                $result .= "
                <div class='form-check'>
                    <label class='form-check-label'> 
                        <input type='checkbox' class='form-check-input' name='{$datas['name']}' value='{$value['value']}'>
                        {$value['label']}
                    </label>
                </div>
                ";

                $count++;
            }

            $result .= '</div>';
            
            break;

        default:
            $result = "
            <div class='row'>
                <label for='{$datas['name']}' class='col-form-label'>{$datas['label']}</label>
                <div class=''>
                    <input type='{$datas['type']}' class='form-control' name='{$datas['name']}' placeholder=''>
                </div>
            </div>
            ";
            break;
    }

    return $result;
}
