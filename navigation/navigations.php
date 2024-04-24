<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title;?> | APHUNZRE </title>

    <!-- Bootstrap core css  -->
    <link href="<?php echo web_root;?>css/bootstrap.main.css" rel="stylesheet">
    <link href="<?php echo web_root;?>css/bootstrap-datepicker.main.css" rel="stylesheet" media="screen">
    <link href="<?php echo web_root;?>css/dataTable.bootstrap.css" rel="stylesheet" media="screen">
    <!--<link href="<?php echo web_root;?>css/kcctc.css" rel="stylesheet" media="screen">--->
    <link href="<?php echo web_root;?>fonts/font-awesome.main.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?> loginregister.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>assets/iCheck/flat/blue.css">
    <!---bootstrap wysihtml5 -text editor -->
    <link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.main.css">
    <link rel="stylesheet" href="<?php echo web_root; ?> css/jquery-ui.css">
    <style type="text/css">

        #content {
             min-width: 550px;
             margin: 0;
             width: 100%;
        }
        .footer-links{
         /* margin-left: 5px; */
        }
        #footer > footer{
            background-color: rgb(0, 67, 200);
            min-width: 50px;
            padding: 10px;
            border-top: 1px solid #ddd;
            color: #fff;
        }
        #content{
            margin-right: 0px;
            margin-left: 90px;
            width: 90%;
        }
        #content::before,
        #content::after{
            display: table;
            content: "";
        }
        #content::after{
            clear: both;
        }
        #content::before,
        #content::after{
            display: table;
            content: "";
        }
        #content::after{
            clear: both;
        }
        #mySidenav{
            position: absolute;
            left: -130px;
            transition: 0.3s;
            padding: 20px;
            width: 190px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            border-radius: 0 5px 5px 0;
        }
        #mySidenav a:hover{
            left: 0;
        }
        #lesson{
            top: 180px;
            background-color: rgb(0, 67, 200);
        
        }
        #exercise{
            top: 260px;
            background-color: rgb(0, 81, 242);
        }
        #download{
            top: 340px;
            background-color: rgb(33, 107, 255);
        }
        #about{
            top: 420px;
            background-color: rgb(79, 138, 255);
        }
        #login{
            top: 500px;
            background-color: rgb(137, 176, 255);
        }
        #title-header{
            background-color: rgb(0, 67, 200);
            border-bottom: 1px solid #ddd;
            height: 130px;
            padding: 10px 0px;
            text-align: center;
            color: #fff;
            font-size: 18px;
        }
    </style>

</head>
<body>
    <section id="title-header">
        <div class="title">
            <img src="" alt="">

            <p class="subtitle"></p>
        </div>
    </section>
    <section id="navigation">
        <div id="mySidenav" class="sidenav">
            <a href="<?php echo web_root; ?>index.php?q=lesson" id="lesson">Lesson <i class="fa fa-home pull-right"></i></a>
            <a href="<?php echo web_root; ?>index.php?q=exercise" id="exercise">Exercise <i class="fa fa-pencil pull-right"></i></a>
            <a href="<?php echo web_root; ?>index.php?q=download" id="download">Download <i class="fa fa-download pull-right"></i></a>
            <a href="<?php echo web_root; ?>index.php?q=about" id="about">About <i class="fa fa-info-circile pull-right"></i></a>
        </div>
    </section>
    <section id="footer">
        <!-- <div></div> -->
    <footer>
        <p align="left">&copy; MOVING FORWORD WITH EDUCATIIN</p>
    </footer>
    </section>
    <script type="text/javascript" lang="javascript" src="<?php echo web_root; ?>js/jquery.min.js"></script>
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" lang="javascript" src="<?php echo web_root; ?>js/jquery.dateTable.js"></script>
    <script src="<?php echo web_root; ?>assets/iCheck/icheck.min.js"></script>

    <!-- Bootstrap WYSIHTML -->
    <script type="text/javascript" src="<?php echo web_root; ?>js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo web_root; ?>js/autofunc.js"></script>
    <script src="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- page script -->

    <script>
        $(function() {
            //add text editor
            $("#compose-textarea").wysihtml5();
        }
    )
    </script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            var t = $("#example").DataTable( {
                "bsort" : false,
                "columnDets" : [ {
                 "searchable" : false,
                 "orderable" : false,
                 "targets" : 0
                }],
                //vertical scroll
                //scrollY : "300px"
                "scrollCollapse" : true,

                "order" : [[1, 'desc']]
            });
            t.on('order.dt search.dt', function(){
                t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function(cell, i){
                    cell.innerHTML = i+1;
                });
            }).draw();
        });

        $(document).ready(function() {
            var t = $("#example2").DataTable( {
                "bsort" : false,
                "columnDets" : [ {
                 "searchable" : false,
                 "orderable" : false,
                 "targets" : 0
                }],
                //vertical scroll
                //scrollY : "300px"
                "scrollCollapse" : true,
                
                //ordering start at column 1
                "order" : [[1, 'desc']]
            });
            t.on('order.dt search.dt', function(){
                t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function(cell, i){
                    cell.innerHTML = i+1;
                });
            }).draw();
        });
    </script>

    <script type="text/javascript">
        $("#date_picker").datetimepicker({
            format: 'mm/dd/yyyy',
            language: 'en',
            weekStart : 1,
            todayBtn : 1,
            autclose : 1,
            todayHighlihgt : 1,
            startView : 2,
            minView : 2,
            forceParse : 0
        });
    </script>

    <script>
        function checkall(selector) {
            if(document.getElementById('chkall').checked==true)

            {
                var chkelement=document.getElementsByName(selector);
                for(var i=0; i<chkelement.length;i++)
                {
                    chkelement.item(i).checked=true;
                }
            }
            else{
                var chkelement=document.getElementsByName(selector);
                for(var i=0;i<chkelement.length;i++)
                {
                    chkelement.item(i).checked=false;
                }
            }
        }

        function checkNumber(textBox){
            while(textBox.value.length > 0 && isNaN(textBox.value)){
                textBox.value = textBox.value.substring(0, textBox.value.length -1)
            }
            textBox.value = trim(textBox.value);
        }

        //
        function checkText(textBox){
            var alphaExp = /^[a-zA-Z]+$/;
            while(textBox.value.length > 0 && !textBox.value.match(alphaExp)){
                textBox.value=textBox.value.substring(0, textBox.value.length -1)
            }
            textBox.value=trim(textBox.value);
        }

        $(document).on("change", ".radios",function(){
            var exerciseid = $(this).data('id');
            var value = $(this).val();

            //alert(value)
            if($(this).is(':checked')){
                $.ajax({
                    type: "POST",
                    url : "validation.php",
                    datatype: "text",
                    data : {ExerciseID:exerciseid,value:value},
                    success : function(data){
                        //alert(data)
                    }
                });
            }
        });
    </script>
</body>
</html>