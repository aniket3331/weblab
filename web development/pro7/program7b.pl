#!C:\xampp\perl\bin\perl.exe
print "Content-type:text/html\n\n";
use CGI ':standard';

$count_file="ru.txt";
if(open(FILE,'<'.$count_file))
{
		$no_accesses = <FILE>;
		close(FILE);
		if(open(FILE,'>'.$count_file))
		{
			$no_accesses++;
			print FILE $no_accesses;
			close(FILE);
			print "no. of visitors:",$no_accesses;
		}
		else
		{
			print "Can't write to data file";
        }
} else
{
		print "Sorry";
}
exit(0);
