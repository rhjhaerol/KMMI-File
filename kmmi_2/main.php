<?php
    // mendeklarasikan variabel dimulai dg '$'
    $course_field = 'Design and Build Web'; // string

    $course_week = 2; // int

    $required_php = 7;

    $php_version = 8.1 + .1; //float

    $required_php ++;

    $condition1 = TRUE; // boolean
    $condition2 = FALSE;

    // var_dump($condition1 || $condition2); // menampilkan nilai variabel

    $input_number = rand(1,10);

    $check_type = $input_number%2==0?'even number':'odd number';

    // echo 'Value of input ' . $input_number . ' is an ' . $check_type . '!';

    $is_even = FALSE;

    // course dengan type data array dengan braket
    $course_list = [
        'Design and Build Web', //index 0
        'Basic Animation', //index 1
        'Digital Marketing', //index 2
        'Tactical Game Programming' //index 3
    ];

    // topic dengan tipe data array
    $topic_list = array(
        'HTML and CSS ' . $php_version, // except array, object
        'C Programming',
        'Project Management',
        'Software Architech'
    );
    
    // oop dalam php
    $course_information = new stdClass();
    $course_information-> title = 'Design and Build Web';
    $course_information-> totalparticipan = 80;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>KMMI 2021 - INTRODUCTION</title>
</head>

<body>
    <h1>
        Course - <?php echo $course_field; ?> <!--memanggil varibel php-->
    </h1>

    <table border="1" width="100%">
        <tr>
            <th>No</th> 
            <th>Course</th>
            <th>Level</th>
            <th>Topic</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $course_list[0];?></td> <!--memanggil array course pada indeks ke-0--> 
            <td>Beginner</td>
            <td><?php echo $topic_list[0];?></td> <!--memanggil array topic pada indeks ke-0-->
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $course_list[1];?></td>
            <td>Beginner</td>
            <td><?php echo $topic_list[1];?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $course_list[2];?></td>
            <td>Beginner</td>
            <td><?php echo $topic_list[2];?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $course_list[3];?></td>
            <td>Beginner</td>
            <td><?php echo $topic_list[3];?></td>
        </tr>
    </table>
</body>
</html>