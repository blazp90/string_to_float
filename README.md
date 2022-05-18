<h1>Helper code snippet</h1>
<p>
  Helper function that i`m using instande of input type="number"<br />
  the input has up and down arrows, that can provide quick user mistakes if they using the keyboard.<br />
  if you are using the input on iPhone, you are allowed only to use arrowns. That`s not optimal if you want to input large numbers(like -1985,56).
</p>
<br />
<br />
<h3>PHP</h3>
string_to_float.php<br />
Helper function for changing string to float value.<br />
<br />
Example:<br />
2110           => 2110.0<br />
2.110,60       => 2110.6<br />
2,110.60       => 2110.6<br />
2.110.60       => 2110.6<br />
2,110,60       => 2110.6<br />
89,561,52.66   => 8956152.66<br />
89.561.52,66   => 8956152.66<br />
20.2,1,10.6085 => 202110.6085<br />
2.A1b10.60     => 2110.6<br />
2,A1b10.60     => 2110.6<br />
2,A1b,10.6000  => 2110.6<br />
2,A1b,10.6080  => 2110.608<br />
<br />
<br />

<h3>JavaScript</h3>
decimal_field.html<br />
Helper function to change text input field to numeric field.<br />
<br />
Example allowed value (default settings):<br />
1985<br />
1.985<br />
-1985<br />
-1.985<br />
+1985<br />
+1.985<br />

1985,56<br />
1.985,56<br />
-1985,56<br />
-1.985,56<br />
+1985,56<br />
+1.985,56<br />

