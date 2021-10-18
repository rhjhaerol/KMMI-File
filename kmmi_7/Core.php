<?php

function validate_data($submit)
{
    return (empty($submit));
}

function render_form($datas){

    $result = '';
    
    switch ($datas['type']) {
        case 'email':
            $result = "
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <input class='form-control font-weight-medium' placeholder='{$datas['placeholder']}' name='{$datas['name']}' type='{$datas['type']}'>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
                </div>
            ";
            break;
        case 'text':
            $result = "
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <input class='form-control font-weight-medium' placeholder='{$datas['placeholder']}' name='{$datas['name']}' type='{$datas['type']}'>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
                </div>
            ";
            break;
        case 'textarea':
            $result = "
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <textarea class='form-control font-weight-medium' placeholder='{$datas['placeholder']}' name='{$datas['name']}' type='{$datas['type']}'></textarea>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
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
                        <input type='radio' class='form-check-input font-weight-medium' name='{$datas['name']}' value='{$value['value']}' $checked>
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
            <div class='form-group'>
                    <label for='{$datas['name']}' class='control-label'>{$datas['label']}</label>
                    <input class='form-control font-weight-medium' name='{$datas['name']}' type='{$datas['type']}'>
                    <small class='form-text text-muted font-weight-medium'>{$datas['ket']}</small>
                </div>
            ";
            break;
    }
    return $result;

}

?>
