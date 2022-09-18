
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Welcome to Food Corporation of India</title>
    <link href="favicon.ico" rel="shortcut icon" />
    <link href="Style.css" rel="stylesheet" />
    <!-- drop down menus -->
    <script src="jquery-1.3.2.min.js"></script>
    <script src="image-rotate.js" type="text/javascript"></script>
    <style type="text/css">
        .btn {
            -webkit-border-radius: 7;
            -moz-border-radius: 7;
            border-radius: 7px;
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            background: #91ab1b;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
        }

            .btn:hover {
                background: #587201;
                text-decoration: none;
            }
        .style1
        {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Top Srripe-->
        <div class="topStripe">
            <div>
                <ul>
                    <li class="noBord">
                        <ul>
                            <li><a class="active" href="#"><span></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Top Srripe-->
        <!-- Header-->
        <div id="header">
            <div class="wrapper">
                <h1 title="Food Corporation of India">
                    <span>&#2349;&#2366;&#2352;&#2340;&#2368;&#2351; &#2326;&#2366;&#2342;&#2381;&#2351; &#2344;&#2367;&#2327;&#2350;</span>Food Corporation of India
                </h1>
                <div class="quicAccess" style="visibility: hidden;">
                    <ul>
                        <li><a class="active" href="#"><span></span></a></li>
                    </ul>
                    <div class="search">
                    </div>
                    <!-- End of search -->
                </div>
                <!-- End of wrapper -->
            </div>
        </div>
        <!-- /Header-->
        <!--  Start of banner -->
        <div id="banner">
            <div class="banner-right">
                <div class="wrapper">
                    <span class="logoWrap"><a href="#">
                        <img alt="FCI- logo" src="logo.jpg"></a> </span>
                    <div id="bannerWrap">
                        <ul>
                            <li style="opacity: 0;" class="">
                                <img alt="Banner" src="banner3.jpg"></li>
                            <li style="opacity: 0; top: 0px; left: 1px; width: 875px;" class="">
                                <img alt="Banner" src="banner1.jpg"></li>
                            <li style="opacity: 1;" class="show">
                                <img alt="Banner" src="banner2.jpg"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of banner -->
        <div class="page-bg">
            <!-- Nav-->

            <div id="mainMenu">
                <br class="spacer">
            </div>
            <!-- /Nav-->
            <div id="top" class="wrapper">
                <!-- Mid column-->
                <div id="content">
                    <div id="midColumn">
                        <div class="ops">
<body style="background-color: #F1F8D1">
    <form name="form1" method="post" action="Result.php" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE3MDc5MjQzOTdkZH+Ppiu8ygL5BvAF8AIAwrdccT05IlvWrlzY+4oUq+ys" />
</div>
      <?php
            if(isset($_POST['checkresult'])){
                header("Location: Result.php");
            }
        ?>
<div>

    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B6D52677" />
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAQRuP+2TzmcWc5mx++QOhO6TL1VrKdjXq18n5Pc/YSyZVgf7fF7Hz24SrWg8QUg/S8PixFK8Vl9fJPp8trIg+jJz9bpZtPWg2069tbW2RDqZfzl/8PpOgGWR9eI+nP8Diw=" />
</div>
         <div align="center">
          <img src="logo.png" style="width: 10%"  />
         <h2>Food Corporation of India</h2>
         </div>
          <div align="right" style="color: #0000FF"></div>
    <hr />
    
    <table width="80%">
    
    <tr>
    <td width="40%" colspan="2" style="text-align: center; width: 80%">&nbsp;</td>
    </tr>
    <tr class="style2">
    <td width="0%"><b>Roll Number</b><span class="style3"> <span class="style1">*</span></span></td><td colspan="6" class="style1"><input name="txtControlNo" type="text" id="txtControlNo" class="form-control" placeHolder="Roll Number" /> 
        <span 
            class="style3">
        <br />
        <br />
        (AND)</span></td>
    </tr>
    <td width="40%">&nbsp;</td><td width="40%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
    </tr>
     <tr>
    <td><span class="style2"><strong>Date of Birth </strong></span> 
        <span class="style1">*</span></td><td><input name="txtRollNo" type="text" id="txtRollNo" class="form-control" placeholder="dd/mm/yyyy" />
         <span class="style2">&nbsp;[DD/MM/YYYY]</span></td>
    </tr>
     <tr>
    <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
     <tr>
     <td>
        <form action="" method="post">
            <input type="submit" name="checkresult" value="Check Result" text-align="center" input type="submit" name="btnChkResult" value="Check Result" id="btnChkResult" class="btn btn-default" style="width:196px;">
        </form>
    
        <div style="clear:both;"> </div></td>
    
    </tr>
     <tr>
    <td colspan="2" style="text-align: center"><span id="lblMsg" style="color:Red;"></span>&nbsp;</td>
    </tr>
    </table>

    <hr />
    </div>
    </form>
    <?php
        if(isset($_POST['Check Result'])){
            $connection = mysquli_connect("localhost","root","");
            $db = mysquli_select_db($connection,"result");
            $query = "select *"
        }
</body>
</html>
