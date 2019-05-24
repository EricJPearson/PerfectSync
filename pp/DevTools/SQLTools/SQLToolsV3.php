<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/ps06_96_Layer_2_DevTools.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="DocTitle" --><title>SQL Tools Version 3 -- What's New?</title>
<style type="text/css">
<!--
.style1 {color: #FF00FF}
-->
</style>
<!-- InstanceEndEditable -->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link href="/Templates/ps06.css" rel="stylesheet" type="text/css" />
</head>
<body>
<img src="/rt/Dingbats/H1_512.jpg" width="512" height="16" /><br />
<img src="/rt/Dingbats/H2_104.jpg" width="24" height="104" /><img src="/rt/Company/Logos/PS/Logo_PS_96.gif" alt="Perfect Sync logo" width="96" height="96" /><img src="/rt/Company/Logos/PS/Text_PS_192.gif" alt="Perfect Sync" width="192" height="36" /><br />
<img src="/rt/Dingbats/H3_48.jpg" width="24" height="48" /><!-- InstanceBeginEditable name="Header Image 96x48" --><img src="/rt/Dingbats/Headers/SQL_Tools_96.gif" alt="SQL Tools" width="96" height="48" /><!-- InstanceEndEditable --><br />
<div id="main" style="margin: 0 auto; width:1000px;">
<!-- InstanceBeginEditable name="Body" -->
    <p align="center"><img src="/rt/Dingbats/Divider.A.512.gif" width="512" height="8"  /></p>
    <p align="center"><img src="/rt/DevTools/SQLTools/SQLTools_256.gif" alt="SQL Tools" width="256" height="62" />    <br />
    <img src="/rt/DevTools/SQLTools/WhatsNew_192.gif" alt="What's New in Version 3?" width="192" height="57" /></p>
    <p align="center"><img src="/rt/Dingbats/Divider.Z.512.gif" width="512" height="8"  /></p>
    <p align="center"><span class="style1">(PRO)</span> <em>indicates features available only in SQL Tools Pro</em></p>
    <blockquote>
      <blockquote>
        <p align="left" class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Less Fat, More Meat</p>
        <blockquote>
          <p align="left">SQL Tools Version 3 is leaner than Version 2.  In spite of all of the powerful new features, the SQL Tools DLLs have grown by less than 7k*.   Many SQL Tools functions are measurably faster, too.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Embed SQL Tools In Your Programs</p>
        <blockquote>
          <p>Instead of using the SQL Tools DLL, you have the option of using <strong>PowerBASIC Units** and Libraries**</strong>. This allows you to link SQL Tools directly into your programs instead of distributing a separate DLL file.  Even better, PowerBASIC will link <em>only</em> the SQL Tools functions that your program actually needs, so the final result will be much smaller.  For example, the SQL_DUMP sample program and Pro DLL require 201k*.  Using the PBLIB version you can create a single, self-contained EXE file of just 82k.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Retrieve Entire Result Sets in a Single Operation</p>
        <blockquote>
          <p>The three new <span class="Code"><strong>SQL_ResultSet</strong></span> functions can be used to retrieve all of the rows of a result set in a single operation.  The result set can be returned to your program as...</p>
        </blockquote>
        <ol>
          <li>  a two-dimensional PowerBASIC string array</li>
          <li> a PARSE$-compatible CSV (Comma Separated Values) string</li>
          <li>a CSV disk file <span class="style1">(PRO)</span></li>
          <li>a PowerBASIC <strong>PowerArray</strong> Object**</li>
          <li>a packed string or </li>
          <li> a packed file <span class="style1">(PRO)</span>.  </li>
        </ol>
        <blockquote>
          <p class="Tiny">The &quot;packed&quot; options are compatible with PowerBASIC's JOIN$ and PARSE functions.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Easier Retrieval of Column Data</p>
        <blockquote>
          <p>Retrieving values from individual Result Columns has been simplified too.  The new functions <span class="Code"><strong>SQL_ResColString</strong></span> and <span class="Code"><strong>SQL_ResColNumeric</strong></span> replace <em>ten</em> Version 2 functions <span class="Tiny">(SQL_ResColSInt, SQL_ResColUInt, SQL_ResColBInt, SQL_ResColDate, SQL_ResColTime, SQL_ResColDateTime, SQL_ResColDateTimePart, SQL_ResColFloat, SQL_ResColStr, and SQL_ResColText)</span>.</p>
        </blockquote>
        <ul>
          <li>          <span class="Code">SQL_ResColNumeric</span> and <span class="Code">SQL_ResColString</span> can return PowerBASIC QUAD Integer values, which were not directly supported by Version 2.</li>
          <li><span class="Code">SQL_ResColNumeric</span> automatically returns numbers for result columns that contain strings, such as 9.87 for the string &quot;09.87.654&quot;. </li>
          <li><span class="Code">SQL_ResColString</span> automatically returns strings for all numeric values.  For example if <span class="Code">SQL_ResColNumeric</span> returns 1234, <span class="Code">SQL_ResColString</span> will return &quot;1234&quot;.</li>
          <li> <span class="Code">SQL_ResColString</span> supports <span class="Code">SQL_GUID</span> (Globally Unique Identifier) columns, which are compatible with the PowerBASIC GUID functions.<br />
          </li>
          <li>For very unusual circumstances, the new <span class="Code">SQL_ResColRaw</span> <span class="style1">(PRO)</span> and <span class="Code">SQL_ResColBuffer</span> <span class="style1">(PRO)</span> functions can be used to obtain unprocessed data.  Examples include user-defined <span class="Code">SQL_DECIMAL</span>, <span class="Code">SQL_NUMERIC</span>, and <span class="Code">SQL_FLOAT</span> columns which do not correspond to a standard SQL data type; Signed Bytes; Unsigned Quad Integers; and virtually any proprietary data format (as long as you know the format).</li>
        </ul>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Easy Retrieval of Long Data	</p>
        <blockquote>
          <p>The new <span class="Code"><strong>SQL_ResColMemo</strong></span> function makes retrieving Long String data much easier.  <span class="Code"><strong>SQL_ResColBLOB</strong></span> <span class="style1">(PRO)</span> does the same thing for Binary Large OBjects, making it simple to retrieve images, sounds, entire documents, and even executable programs that are stored a database. A &quot;Direct To File&quot; option <span class="style1">(PRO)</span> is  available in both functions, so your program doesn't have to handle the cumbersome data directly; just give SQL Tools the name of the disk file you want to create. </p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> And Long Data Is Easy To Save, Too </p>
        <blockquote>
          <p>The new <span class="Code"><strong>SQL_UpdateMemo</strong></span> function greatly simplifies the process of storing Long Strings in a database, and <span class="Code"><strong>SQL_UpdateBLOB</strong></span> <span class="style1">(PRO)</span> stores Binary Large OBjects. A &quot;Direct From File&quot; option is available, so your program doesn't have to handle the data directly. Supply the name of a disk file, and SQL Tools will store the file in your database. </p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Improved Date/Time  Formatting	</p>
        <blockquote>
          <p>The new <span class="Code"><strong>SQL_DateTimePart</strong></span> and <span class="Code"><strong>SQL_DateTimePartStr</strong></span> functions are far more flexible than the old (Version 2) <span class="Code">SQL_ResColDateTimePart</span> function.</p>
        </blockquote>
        <ul>
          <li>They can be used to format virtually any date/time value, not just values from Result Columns.</li>
          <li> They can be used to obtain many useful numeric values such as the Quarter, the Day Of Year, and six varieties of Julian Dates including the Unix/Linux, NASA, and Microsoft Excel standards <span class="style1">(PRO)</span>.</li>
          <li> <span class="Code">SQL_DateTimePartStr</span> returns many different non-numeric values, including Day/Month names and abbreviations, multi-number values such as &quot;12:34:56&nbsp;pm&quot;, and century names like &quot;21st&quot;.</li>
          <li> Both functions are fully compatible with PowerBASIC's new <strong>PowerTime**</strong> Object.</li>
        </ul>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" />	 Enhanced support for Microsoft Access databases.</p>
        <blockquote>
          <p> Access doesn't support some important SQL features like Primary Keys <span class="style1">(PRO)</span>, Foreign Keys <span class="style1">(PRO)</span>, and Stored Procedures <span class="style1">(PRO)</span> in the normal, ODBC-standard way, so SQL Tools Version 3 includes comprehensive work-arounds for those missing features.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> New &quot;Labeling&quot; Functions </p>
        <blockquote>
          <p>All of the <span class="Code">SQL_Info</span> and <span class="Code">SQL_Attrib</span> functions now return label and formatting strings as well as values.  For example...</p>
        </blockquote>
        <ul>
          <li> <span class="Code">SQL_TblInfoStr(<strong>%INFO_LABEL</strong>, %TABLE_NAME)</span> returns the label string &quot;TABLE_NAME&quot; </li>
          <li> <span class="Code">SQL_TblInfoStr(<strong>%INFO_FORMAT</strong>, %TABLE_NAME)</span> returns &quot;STR&quot; to indicate that the return value of <span class="Code">%TABLE_NAME</span> is a string.</li>
          <li> These features have been used internally to enhance the SQL Tools Trace functions (see below) and they can be very useful in your programs too.  Check out the new <span class="Code">SQL_INVENTORY.BAS</span> sample program for an example.</li>
        </ul>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Driver Defined Fields	</p>
        <blockquote>
          <p>100% of the <span class="Code">SQL_Info</span> functions now support Driver-Defined fields.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" />	 SQL Statement Auditing</p>
        <blockquote>
          <p>SQL Statement Auditing is provided by the new <span class="Code"><strong>SQL_Audit</strong></span> <span class="style1">(PRO)</span> and <span class="Code"><strong>SQL_AuditStr</strong></span> <span class="style1">(PRO)</span> functions.  SQL Tools can now create Audit Files that record all of the SQL Statements that your program executes, including workstation, username, and date/time stamps.  SQL Tools Error Messages are automatically saved in the same file, and your programs can easily add additional information such as the number of rows affected by each statement.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> DBMS Identification Functions	</p>
        <blockquote>
          <p>The new <span class="Code"><strong>SQL_DBMS</strong></span> function returns numeric values like <span class="Code">%DBMS_ACCESS</span> and <span class="Code">%DBMS_MYSQL</span> that identify the type of database that your program is using, and the <span class="Code"><strong>SQL_DBMSName</strong></span> function returns strings like &quot;Microsoft Access (MS Corp)&quot; and &quot;MySQL (Oracle)&quot;.  Over 50 drivers are currently recognized.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Improved Tracing and Troubleshooting	</p>
        <blockquote>
          <p>The SQL Tools Trace Files have been greatly enhanced.  Six different levels of tracing are now available, and most of the numeric values in the Trace File are translated into words (for example <span class="Code">SQL_SUCCESS</span> instead of <span class="Code">0</span>).  ODBC-level tracing, while rarely necessary, has also been made easier to use.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Utility and Convenience Functions </p>
        <blockquote>
          <p>Several convenience features have been added to Version 3, like <span class="Code"><strong>SQL_Fail</strong></span> (a complement to <span class="Code">SQL_Okay</span>); <span class="Code"><strong>SQL_ToolsVersionStr</strong></span>, <span class="Code"><strong>SQL_DataTypeStr</strong></span>, <span class="Code"><strong>SQL_CurrentTrace</strong></span>, <span class="Code"><strong>SQL_EnvironAttribStr</strong></span>, <span class="Code"><strong>SQL_StatementAttribStr</strong></span>, <span class="Code"><strong>SQL_TblStatInfoStr</strong></span>, <span class="Code"><strong>SQL_ParamInfoStr</strong></span> <span class="style1">(PRO)</span>, <span class="Code"><strong>SQL_CurrentThread</strong></span> <span class="style1">(PRO)</span>, <span class="Code"><strong>SQL_SaveFile</strong></span> <span class="style1">(PRO)</span> (for creating BLOB files, among other things); and <span class="Code"><strong>SQL_TableRowCount</strong></span> <span class="style1">(PRO)</span>.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> New Options for Old Functions	</p>
        <blockquote>
          <p>Some SQL Tools functions have new parameters to make them more flexible.  For example, <span class="Code">SQL_OpenDB</span> now has a parameter that controls the Prompt Type.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Optional Parameters Make Coding Easier	</p>
        <blockquote>
          <p>Many SQL Tools functions are now easier to use because they have OPTIONAL parameters for <em>rarely-used</em> features.  Other functions have OPTIONAL parameters for the most <em>commonly used</em> operations, for example <span class="Code">SQL_Fetch</span> (with no parameter) now does the same thing as <span class="Code">SQL_Fetch %NEXT_ROW</span>.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Fine-Tuned &quot;Predictable Error&quot; Handling	</p>
        <blockquote>
          <p>Several frequently-used SQL Tools functions now have an OPTIONAL parameter called <em>sIgnoreErrors$</em> which makes it even easier to handle predictable errors and advisories. </p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Easier, More Logical Mnemonics	</p>
        <blockquote>
          <p>Many function name have been simplified, and many equates have been renamed to make them easier to remember.  For example, all of the Version 2 <span class="Code">UInt</span> and <span class="Code">SInt</span> suffixes have been eliminated.  But don't worry, SQL Tools Version 3 provides an extra #INCLUDE file that recognizes all of the old names, so updating an existing program to Version 3 is usually very simple.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> Unicode Support </p>
        <blockquote>
          <p>Like the newest PowerBASIC compilers, SQL Tools Version 3 has significantly enhanced support for Unicode and the databases that use it.</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> More Capacity	</p>
        <blockquote>
          <p>SQL Tools Version 3 can handle larger, more complex database applications than Version 2.The Pro version can manage up to 1,024 concurrent statements -- perfect for threaded, server/client, and web site applications -- and the Standard version can have up to 4 concurrent statements.  Version 2 was limited to 256 and 2, respectively.  (Your actual runtime capabilities are of course dependent on the runtime hardware.)</p>
        </blockquote>
        <p class="Medium"><img src="/rt/Dingbats/GoldDotSeparator_12.gif" width="12" height="12" /> New	Documentation Options </p>
        <blockquote>
          <p>The SQL Tools documentation is now provided in HTML/CHM, PDF, HLP, <em>and</em> online formats.  The docs have grown by almost 25% compared to Version 2.          </p>
        </blockquote>
        <p class="Tiny">* Refers to the &quot;No Trace&quot; Pro DLL.<br />
          <br />
          ** Indicates PowerBASIC features that are available only when using PB/Win 10 or PB/CC 6 and above.</p>
      </blockquote>
    </blockquote>
    <p align="center"><a href="/pp/DevTools/SQLTools/SQLTools.php"></a><span class="Medium"><a href="/pp/DevTools/SQLTools/SQLTools.php">Return to SQL Tools Main Page </a></span></p>
  <!-- InstanceEndEditable -->
</div>
<p align="right"><img src="/rt/Company/Logos/PS/Logo_PS_32.gif" alt="Perfect Sync logo" width="32" height="32" /><img src="/rt/Dingbats/H8_64.jpg" width="24" height="64" /><br />
<img src="/rt/Dingbats/H9_512.jpg" width="512" height="24" /><br />
<span class="Updated"><!-- InstanceBeginEditable name="LastEdited" --> UPDATED 30 JUL 2017<!-- InstanceEndEditable -->&nbsp;&nbsp;&nbsp;&nbsp;</span><br />
</p>
<p align="center"><span class="Tiny"><img src="/rt/Dingbats/Divider.A.512.gif" width="512" height="8"  /><br />
  <br />
   <a href="/pp/Company/AboutUs.php">About Us</a>
  <img src="/rt/Dingbats/Dot.Red.8.gif" width="8" height="8" />&nbsp;<a href="/pp/Company/ContactUs.php">Contact Us</a>
  <img src="/rt/Dingbats/Dot.Red.8.gif" width="8" height="8" />&nbsp;<a href="/pp/Company/MarksAndIP.php">Legal Stuff</a>
  <img src="/rt/Dingbats/Dot.Red.8.gif" width="8" height="8" />&nbsp;<a href="/index.html">Main Page</a>
  <br />
  &copy; Copyright <!-- InstanceBeginEditable name="CopyrightYear" -->2011<!-- InstanceEndEditable -->-2017 Perfect Sync, Inc.  
All rights reserved<br />
<br /><img src="/rt/Dingbats/Divider.Z.512.gif" width="512" height="8"  /></span></p>
<p align="center"><br />
</body>
<!-- InstanceEnd --></html>
