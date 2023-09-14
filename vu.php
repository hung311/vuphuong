<?php
// Đường dẫn tới tệp cần tải về
$file = 'C:\Users\hungc\programs\game.zip';

// Xác định kiểu tệp
header('Content-type: application/octet-stream');

// Xác định tên tệp khi tải về
header('Content-disposition: attachment; filename=' . basename($file));

// Đọc và trả về nội dung của tệp
readfile($file);
