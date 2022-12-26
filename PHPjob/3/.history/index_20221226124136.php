<?php
// 年齢
$age = 24;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ';
}
?>