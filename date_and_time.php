<?php 
date_default_timezone_set("Asia/Tashkent");
echo "xozirgi sana:". date ("Y-m-d"). "<br>";
echo "xozirgi sana:". date ("Y.m.d"). "<br>";
echo "xozirgi sana:". date ("Y_m_d"). "<br>";
echo "xozirgi sana:". date ("Y/m/d"). "<br>";
echo "xozirgi sana:". date ("Y\M\D\H"). "<br>";
echo "xozirgi sana:". date ("y-m-d"). "<br>";
echo "Mushtariyning kirgan  sanasi:". date ("Y.m.d.h"). "<br>";
echo "xozirgi sana:". date ("Y:m:d"). "<br>";
echo "xozirgi sana:". date ("H:i:s"). "<br>";
echo "xozirgi sana:". date ("H:i:sa"). "<br>";
echo "xozirgi sana:". date ("D.m.Y"). "<br>"; 
echo "xozirgi sana:". date ("I"). "<br>";
echo "xozirgi sana:". date ("H:i d.m.Y"). "<br>";
echo "xozirgi sana:". date ("Y-m-d"). "<br>";
echo "xozirgi sana:". date ("Y m d"). "<br>";
echo "xozirgi sana:". date ("D m Y"). "<br>";
//Unix time
echo "Unix time:" .time()."<br>";
echo "Unix time:" .strtotime("0250-11-14")."<br>";
echo"Unix time:" .date("d.m.Y", strtotime("2025-11-14")). "<br>";
echo"Unix time:" .date("d.m.Y", strtotime(" +7 year")). "<br>";
echo"Unix time:" .date("d.m.Y", time()). "<br>";
?>