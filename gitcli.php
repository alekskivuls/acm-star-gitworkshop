<?php
    // Variable Title
    $title = "Useful Commands";
?>
<?php include("inc/top.php"); ?>

<h2 class="big-call" style="margin:10px; padding:0;">Please review the following commands</h2>
<h3 style="text-align:center; font-size:1.4em; margin:40px 0;">(Use Git Bash if on Windows)</h3>

<section class="code-section" id="pwd">
<a name="pwd"></a><p><code>pwd</code> Will output the current directory you are in.</p>
<p>So this should output, for example: (assuming you are in your home directory)</p>
<code>/Users/jake</code> <p>(or <code>/c/Users/jake</code> if you are using windows and gitbash)</p>
</section>

<section class="code-section" id="ls">
<a name="ls"></a><p><code>ls</code> Lists the files in your current directory</p>
<p>So<code>ls</code></p>
<p>Would output:</p>
<pre>
Applications     Google Drive     Projects         pipupdate.py
Desktop          Library          Public           test.py
Documents        Movies           Sites            vim-stuff
Downloads        Music            bower_components
Dropbox          Pictures         myvim
</pre>
</section>

<section class="code-section" id="cd">
<a name="cd"></a><p><code>cd</code> changes the directory you are in, so it would take an argument in the directory you want to go to. <br> So... (assuming I am in my home directory)</p>
<pre>$ <code>cd Documents</code></pre>
<p>will take me into my documents directory <br>Now, if we were to want to go into a directory that was say one level above where we are we would just use <br> <code>cd ..</code><br> And, if for any reason, we needed to go back to our home folder all we would need to do is just type <code>cd</code> by itself and it will return us home.</p>
</section>

<section class="code-section" id="mkdir">
<a name="mkdir"></a><p>To make a directory First type <code>mkdir nameOfDirectory</code>, so for example:</p>
<pre>$ <code>mkdir hereBeSomeStuff</code>
</pre>
<p>Now if we <code>ls</code> we should see the new directory:</p>
<pre>
Applications     Google Drive     Projects         myvim
Desktop          Library          Public           pipupdate.py
Documents        Movies           Sites            test.py
Downloads        Music            bower_components vim-stuff
Dropbox          Pictures         <strong>hereBeSomeStuff</strong>
</pre>
</section>

<section class="code-section" id="touch">
<a name="touch"></a><p>Now we will create a file using the command <code>touch</code></p>
<p>For example: <code>
touch octocat.txt
</code><br><br>Would make a new file octocat.txt inside our current directory (for this example, my home directory)<br>
Now if we <code>ls</code> we should see the new file.<br>
<pre>Applications     Google Drive     Projects         myvim
Desktop          Library          Public           <strong>octocat.txt</strong>
Documents        Movies           Sites            pipupdate.py
Downloads        Music            bower_components test.py
Dropbox          Pictures         hereBeSomeStuff  vim-stuff</pre></p>
</section>

<section class="code-section" id="cat">
<p>Now the command <code>cat</code> stands for concatenate, it will take the contents of a file and either output them, or concatenate them with another file and then output the result<br>For example:</p>
<pre>
dhcp-39-57-11:~ JAKE$ cat octocat.txt
here is some stuff
</pre>
<p>And..</p>
<pre>
dhcp-39-57-11:~ JAKE$ cat octocat.txt octodog.txt
here is some stuff
here is some dog stuff
</pre>
</section>

<section class="code-section" id="curl">
<p>The command <code>curl</code> in basic terms downloads files from the internet. In the context of this workshop we will be using:</p>
<p>
	<pre>$ <code>curl davidnuon.com/resume | sh</code></pre>
</p>
</section>

<a href="#pwd">pwd</a>
<br>
<a href="#ls">ls</a>
<br>
<a href="#cd">cd</a>
<br>
<a href="#mkdir">mkdir</a>
<br>
<a href="#touch">touch</a>
<br>
<a href="#cat">cat</a>
<br>
<a href="#curl">curl</a>
    
<?php include("inc/bottom.php"); ?>
