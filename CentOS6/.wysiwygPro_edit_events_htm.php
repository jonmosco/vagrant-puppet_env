<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "1P6B7KwrfB9nd4O5nTN2DgrapI9dJaum8bUIa_V6w56Z7U3CO9yRo09Gesm1cDWDGX6qK_kLKy9sR1NOwXl8XbdC29bftSXHwbXBkA6xx1pFwqx5mB7TkxRSEzSsJq09IE2ef2hJzi2zfarXzuhWJg38knoxhOh5cNVHe3FrBy0XPpKKg0FGrZ7Qk90KCloCzKoFBPp7EqtG8NhBiIVx4GLzMRJx7undRP_CHDFeMhwqbtPv2WWZT1wW1yavVUz7") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing events.htm</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">
<script language="javascript">
<!--//
// this function updates the code in the textarea and then closes this window
function do_save() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name=mform action="http://www.intoaction.org:2082/frontend/rvblue/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/sober/public_html"><input type="hidden" name="file" value="events.htm">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.intoaction.org:2082/frontend/rvblue/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/sober/public_html"><input type="hidden" name="file" value="events.htm">Aborting Edit&nbsp;....</form></html>');
	document.close();
	document.mform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/config.php');
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/editor_class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

// add a custom save button:
$editor->addbutton('Save', 'before:print', 'do_save();', WP_WEB_DIRECTORY.'images/save.gif', 22, 22, 'undo');

// add a custom cancel button:
$editor->addbutton('Cancel', 'before:print', 'do_abort();', WP_WEB_DIRECTORY.'images/cancel.gif', 22, 22, 'undo');

$body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Into Action - Calendar of Events</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="Microsoft FrontPage 5.0" name="GENERATOR"
<META content="Alcoholics Anonymous, AA, AA Meetings, Into Action" 
name=keywords>
<META content="A.A.Pockets of Enthusiasm groups and events in the United States " 
name=description>
<title>Into Action Home Page</title>
<meta name="Microsoft Theme" content="Intoaction.org">
</HEAD>
<BODY>
<p><a name="top"></a></p>
<!--webbot bot="Include" U-Include="zheader.htm" TAG="BODY" startspan -->
<P align=center style="margin-bottom: 0"><img border="0" src="images/logo.gif" width="540" height="88"></P>
<div align="center">
  <center>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="80%" id="AutoNumber1">
      <tr>
        <td width="15%" align="center">
        <font color="#CEA727">
        <a title="Into Action Home Page" style="text-decoration: none" href="index.htm">
        <font color="#CEA727" size="2">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"><br>
        </font><font color="#CEA727" face="Verdana" size="2"><strong>Home</strong></font></a></font></td>
        <td width="15%" align="center">
        <a title="Into Action Events" style="text-decoration: none" href="forum">
        <font color="#CEA727" size="2">
        <font color="#CEA727">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"></font><br>
        <font face="Verdana"><strong>Forum</strong></font></font></a></td>
        <td width="15%" align="center">
        <a title="Into Action Events" style="text-decoration: none" href="events.htm">
        <font color="#CEA727" size="2">
        <font color="#CEA727">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"></font><br>
        </font>
        <font color="#CEA727" size="2" face="Verdana">
        <STRONG>
        Events&nbsp;</STRONG></font></a></td>
        <td width="15%" align="center">
        <font color="#CEA727" size="2">
        <a title="Into Action Speakers and Audio Downloads" style="text-decoration: none" href="meetings.htm">
        <font color="#CEA727">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"></font><br>
        <strong><font face="Verdana" color="#CEA727">Meetings</font></strong></a></font></td>
        <td width="15%" align="center">
        <font color="#CEA727" size="2">
        <a title="Into Action Speakers and Audio Downloads" style="text-decoration: none" href="downloads.php">
        <font color="#CEA727">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"></font><br>
        <font face="Verdana" color="#CEA727">
        <strong>Speakers</strong></font></a></font></td>
        <td width="15%" align="center">
        <p align="center">
        <a title="Into Action Important Links" style="text-decoration: none" href="links.htm">
        <font color="#CEA727" size="2">
        <font color="#CEA727">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"></font><br>
        <font face="Verdana"><strong>Links</strong></font></font><STRONG><font color="#CEA727" size="2" face="Verdana">&nbsp;</font></STRONG></a></td>
        <td width="15%" align="center">
        <a title="About Into Action" style="text-decoration: none" href="about.htm">
        <font color="#CEA727" size="2">
        <font color="#CEA727">
        <img border="0" src="images/buttonsm.gif" width="48" height="48"></font><br>
        <font face="Verdana"><strong>About Us</strong></font></font><STRONG><font color="#CEA727" size="2" face="Verdana">&nbsp;</font></STRONG></a></td>
      </tr>
</table>
      </center>
</div>
    </blockquote>
  </blockquote>
<div style="border-bottom-style: solid; border-bottom-color: #CA0000">
&nbsp;</div>
</blockquote>

<!--webbot bot="Include" i-checksum="12259" endspan --><p align="left" style="line-height: 150%; margin: 24 48">
<b><font face="Verdana" size="5" color="#CA0000">Calendar of Events</font></b></p>
<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-top-width:0" bordercolor="#111111" width="80%" id="AutoNumber2">
    <tr>
      <td width="10%" style="border-left-color:#111111; border-left-width:1; border-bottom-style:solid; border-bottom-width:1">
      <p style="margin: 6 10"><b><font face="Verdana">Year</font></b></td>
      <td width="15%" style="border-bottom-style:solid; border-bottom-width:1">
      <p style="margin: 6 10"><b><font face="Verdana">Month</font></b></td>
      <td width="10%" style="border-bottom-style:solid; border-bottom-width:1">
      <p style="margin: 6 10"><b><font face="Verdana">Day</font></b></td>
      <td width="60%" style="border-bottom-style:solid; border-bottom-width:1">
      <p style="margin: 6 10"><b><font face="Verdana">Event</font></b></td>
      <td width="5%" style="border-right:1px solid #111111; border-left-style:solid; border-left-width:1; border-top-style:solid; border-top-width:1; border-bottom-style:solid; border-bottom-width:1" valign="top">
      <p style="margin: 6 10"><b><font face="Verdana">Links</font></b></td>
    </tr>
    <tr>
      <td width="10%" valign="top" style="border-left:1px solid #111111; border-right-style: none; border-right-width: medium; border-top-style: solid; border-top-width: 1; border-bottom-style: none; border-bottom-width: medium; ">
      <p style="margin: 6 10"><font face="Verdana" color="#CE0404"><b>2007</b></font></td>
      <td width="15%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: solid; border-top-width: 1; border-bottom-style: none; border-bottom-width: medium">
      <p style="margin: 6 10"><font face="Verdana">January</font></td>
      <td width="10%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: solid; border-top-width: 1; border-bottom-style: none; border-bottom-width: medium">
      <p style="margin: 6 10"><font face="Verdana">6</font></td>
      <td width="60%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: solid; border-top-width: 1; border-bottom-style: none; border-bottom-width: medium">
      <p style="margin: 6 10"><b><font face="Verdana">
      <a href="events/20070106-bocaraton-aor.htm"><font color="#CEA727">Acts of 
      Recovery, Boca Raton</font></a></font></b></td>
      <td width="5%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: solid; border-top-width: 1; border-bottom-style: none; border-bottom-width: medium" align="center">
      <p style="margin: 6 10">
      <a title="View web page" href="events/20070106-bocaraton-aor.htm">
      <img border="0" src="images/ineticon.gif" width="20" height="24"></a><a title="Printable PDF Flyer" href="events/20070106-bocaraton-aor.pdf"><img border="0" src="images/pdficon.gif" width="19" height="19"></a></td>
    </tr>
    <tr>
      <td width="10%" valign="top" style="border-left:1px solid #111111; border-bottom:medium none #111111; border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium; ">
      <p style="margin: 6 10">&nbsp;</td>
      <td width="15%" valign="top" style="border-bottom:medium none #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium">
      <p style="margin: 6 10"><font face="Verdana">February</font></td>
      <td width="10%" valign="top" style="border-bottom:medium none #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium">
      <p style="margin: 6 10"><font face="Verdana">10</font></td>
      <td width="60%" valign="top" style="border-bottom:medium none #111111; border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium">
      <p style="margin: 6 10"><b><font face="Verdana">
      <a href="events/20070210-northernva-aor.htm"><font color="#CEA727">Acts of 
      Recovery, Northern Virginia</font></a></font></b></td>
      <td width="5%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center">
      <p style="margin: 6 10">
      <a title="View web page" href="events/20070210-northernva-aor.htm">
      <img border="0" src="images/ineticon.gif" width="20" height="24"></a></td>
    </tr>
    <tr>
      <td width="10%" valign="top" style="border-left:1px solid #111111; border-bottom:medium none #111111; border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium">
      <p style="margin: 6 10"><b><font face="Webdings" color="#CA0000" size="5">
          <a href="#top" style="text-decoration: none"><font color="#CEA727">5</font></a></font></b></td>
      <td width="15%" valign="top" style="border-bottom:medium none #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium">
      <p style="margin: 6 10"><font face="Verdana">February</font></td>
      <td width="10%" valign="top" style="border-bottom:medium none #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium">
      <p style="margin: 6 10"><font face="Verdana">10</font></td>
      <td width="60%" valign="top" style="border-bottom:medium none #111111; border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium">
      <p style="margin: 6 10"><b>
      <font color="#111111" face="Verdana">Acts of Recovery, New Jersey</font></b></td>
      <td width="5%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center">
      <p style="margin: 6 10">
      <b><font face="Verdana" size="2" color="#CA0000">Coming Soon</font></b></td>
    </tr>
    <tr>
      <td width="10%" valign="top" style="border-left:1px solid #111111; border-bottom:1px solid #111111; border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium; ">
      <p style="margin: 6 10"><b><font face="Webdings" color="#CA0000" size="5">
          <a href="#top" style="text-decoration: none"><font color="#CEA727">5</font></a></font></b></td>
      <td width="15%" valign="top" style="border-bottom:1px solid #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium">
      <p style="margin: 6 10"><font face="Verdana">March</font></td>
      <td width="10%" valign="top" style="border-bottom:1px solid #111111; border-left-style:none; border-left-width:medium; border-right-style:none; border-right-width:medium; border-top-style:none; border-top-width:medium">
      <p style="margin: 6 10"><font face="Verdana">17</font></td>
      <td width="60%" valign="top" style="border-bottom:1px solid #111111; border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium; ">
      <p style="margin: 6 10"><b><font face="Verdana" color="#CEA727">
      <a href="events/20070317-newark-aor.htm"><font color="#CEA727">Acts of 
      Recovery, Newark</font></a></font></b></td>
      <td width="5%" valign="top" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: solid; border-bottom-width: 1" align="center">
      <p style="margin: 6 10">
      <a title="View web page" href="events/20070317-newark-aor.htm">
      <img border="0" src="images/ineticon.gif" width="20" height="24"></a><a title="Printable PDF Flyer" href="events/20070317-newark-aor.pdf"><img border="0" src="images/pdficon.gif" width="19" height="19"></a></td>
    </tr>
  </table>
  </center>
</div>
    </blockquote>
  </blockquote>
</blockquote>

</BODY></HTML>
';

$editor->set_code($body);

// add a spacer:
$editor->addspacer('', 'after:cancel');

// print the editor to the browser:
$editor->print_editor('100%',450);

?>
</div>
</body>
</html>
<?php ob_end_flush() ?>
