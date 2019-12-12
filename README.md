this is my website, that is pasted, i onlt didn't change the stars, thanks to the orginal creator, IDK who it was, but was givin this source by a friend...

if you wish to add back the ip logger and such, heres the insturctions-


First: 

change index.html to index.php (MAKE SURE PHP IS INSTALLED)

Second:

------------------------------------------------------------------------------------------------------------

THIS code goes on the top of all other code in index: 

```ruby
<?php
  //idk why i wanted to log ip's, but i did, and its eBic
  //thanks to my buddy jacob on discord / Jacob H.#2208, he provided this code - 
  /* <?php
$myfile = fopen("testfile.txt", "w")
$txt = $_SERVER["REMOTE_ADDR"]."\n";
fwrite($myfile, $txt); */
    $myfile = fopen("allips.txt", "a+");
    $txt = $_SERVER["REMOTE_ADDR"]."\n";
    if ($txt != "::1\n")
    {
       if ($txt != "[MY IP REDACTED]\n")
       {
         fwrite($myfile, $txt);
       }
    }
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>

<?php
  //idk why i wanted to log ip's, but i did, and its eBic
    $myfile = fopen("currentip.txt", "w");
    if ($txt != "::1\n")
    {
      fwrite($myfile, $txt);
    }
    $txt = $_SERVER["REMOTE_ADDR"]."\n";
    //$old_content = file_get_contents($myfile);
    //fwrite($file, $old_content."\n".$txt);
    fclose($myfile);
?>
```

------------------------------------------------------------------------------------------------------------

Third: find where it says:

```ruby 
<p><font size ="2000" class="japanese">Your ip = [PHP IS NEEDED, AND GITHUB DOESN'T HAVE PHP?]</font></p>
```
and replace it with:

```ruby
<p><font size ="2000" class="japanese">Your ip = <?php include('currentip.txt'); ?></font></p>
```

ALSO!!!!
i added a random image thing using php, heres how to add it back:

First(and only step)-

find the:

```ruby
   background: url(1521237911_1103453878_preview_LitNhNr.gif);
```

and replace it with 

```ruby
   background: url('<?php $a = array('1521237911_1103453878_preview_LitNhNr.gif','a2a0943f1b608680028c23c910a55a04.gif', 'background2.gif', 'background_ebic.webp', 'background4.gif'); echo $a[array_rand($a)];?>');
```

Thanks for reading!
