<?php
$marks=75;
if ($marks>=90) {
    echo ' Grade = A+ ';
} 
elseif ($marks>80 && $marks<90) { 
    echo "Grade = A"; 
}
elseif ($marks>70 && $marks<80) { 
    echo "Grade = B"; 
}
elseif ($marks>60 && $marks<70) { 
    echo "Grade = C"; 
}
else  { 
    echo "Grade = F"; 
}
?>