<?php 
//This Config Does a Few Things
//1.) Redirects to SSL if HTTP.
//2.) Provides siteAbsolutePath (update when deployed or moved).
include_once('../includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="The Official GMDB. DND Resources. Easy as duck.">
  <meta name="author" content="Seth Timmons">
  <?php
  //display title
  echo '<title>'.$pageTitle.'</title>';
  ?>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#333333">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#232323">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <!-- Line Awesome CSS -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <!-- Google Fonts CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu+Mono:ital@1&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
  <!-- GMDB CSS -->
  <link rel="stylesheet" type="text/css" href="./css/quackTools.css">
  <style type="text/css">
    .fakeHref{
      color: blue;
      text-decoration: underline;
      cursor: pointer;
    }
        
    #soundscapesDatatable_filter,
    #soundscapesDatatable_length,
#uSubResDatatable_filter,
#uSubResDatatable_length,
#d100Datatable_filter,
#d100Datatable_length,
#spellsDatatable_filter,
#spellsDatatable_length{
  display: none;
}
.tagBadge{
cursor: pointer;
}
  </style>
}
</head>
<body class="bg-transparent">
  <!-- Top Nav Bar -->
    <?php include_once('../includes/header.php');?>

  <!-- Main Stage -->
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <?php 
        //Check for tool selection
        //
        //no tool
        if(!isset($_GET['tool'])){
              echo '
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">DND Resources</li>
              ';
        }
        //yes tool
        else{          
          switch($_GET['tool']){
            case 'userSubmittedLinks':
              echo '
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'">Home</a></li>
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'/DND">DND Resources</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Submitted Links</li>
              ';
              break;
            case '1d100':
              echo '
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'">Home</a></li>
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'/DND">DND Resources</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reddit r/1d100 Resources</li>
              ';
              break;
            case 'quickRandomContent':
              echo '
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'">Home</a></li>
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'/DND">DND Resources</a></li>
              <li class="breadcrumb-item active" aria-current="page">Quick Random Content</li>
              ';
              break;
            case 'soundscapes':
              echo '
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'">Home</a></li>
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'/DND">DND Resources</a></li>
              <li class="breadcrumb-item active" aria-current="page">Soundscapes DND Music</li>
              ';
              break;
            case 'spells':
              echo '
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'">Home</a></li>
              <li class="breadcrumb-item"><a href="'.$siteAbsolutePath.'/DND">DND Resources</a></li>
              <li class="breadcrumb-item active" aria-current="page">5E Spellbook</li>
              ';
              break;

            default:
              // code...
              break;
          }
        }        
        ?>
      </ol>
    </nav>

    <div id="" class="py-5 mb-4 text-white">
      <div class="container">
        <div class="text-center">
        <!-- <img src="https://thegmdb.com/img/duck_only_large_outline_trans.png" class="img-fluid" alt="GMDB - Easy as duck."> -->
        </div>
        <h1 class="text-center"><?php echo $pageHeading;?></h1>
        <p class="lead text-center"><?php echo $pageTagline;?></p>
        <?php 
        $directory = './dndTools';
        $scanned_directory = array_diff(scandir($directory), array('..', '.','misc'));


        if (!isset($_GET['tool'])){
$_GET['tool']='';
          }


        switch ($_GET['tool']){

          
          //If a tool has been selected
          case 'soundscapes':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">DND Soundscapes</h5>
    <?php include_once('./dndTools/soundscapes.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'DND/" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>';?>
  </div>
</div>
            <?php
            break;

          case 'init':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">Simple Initiative Tracker</h5>
    <?php include_once('./dndTools/init.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'/DND/" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>';?>
  </div>
</div>
            <?php
            break;


          //If a tool has been selected
          case 'userSubmittedLinks':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">User Submitted Links</h5>
    <?php include_once('./dndTools/userSubmittedLinks.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'/DND/" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>'?>
  </div>
</div>
            <?php
            break;




          
          //If a tool has been selected
          case '1d100':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">Reddit 1d100 Resources</h5>
    <?php include_once('./dndTools/1d100.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'/DND/" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>';?>
  </div>
</div>
            <?php
            break;

          
          //If a tool has been selected
          case 'quickRandomContent':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">Quick Random Content Page</h5>
    <?php include_once('./dndTools/quickRandomContent.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'/DND/" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>';?>
  </div>
</div>
            <?php
            break;



          //If a tool has been selected
          case 'spells':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">5e Spellbook</h5>
    <?php require_once('./dndTools/simple_html_dom.php');?>
    <?php include_once('./dndTools/spellsBeta.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>';?>
  </div>
</div>
            <?php
            break;

          //If a tool has been selected
          case 'spellsbeta':
            // code...
            ?>
<div class="card bg-dark text-white">
  <div class="card-body">
    <h5 class="card-title text-center">5e Spellbook</h5>
    <?php include_once('./dndTools/spellsBeta.php')?>
   
  </div>
  <div class="card-body text-left">
    <?php echo '<a href="'.$siteAbsolutePath.'/DND/" class="card-link"><i class="bi-arrow-left-short"></i> DND Resources</a>';?>
  </div>
</div>
            <?php
            break;




          //If no DND tool has been selected
          //default action 
          default:
            // code...
            echo '
            <!-- DND Resources List -->
            <div class="list-group">
              <!-- Enabled Items -->
              <a href="'.$siteAbsolutePath.'/DND/index.php?tool=quickRandomContent" class="list-group-item list-group-item-action">Quick Random Content</a> 
              <a href="'.$siteAbsolutePath.'/DND/index.php?tool=1d100" class="list-group-item list-group-item-action">Reddit 1d100 Resources</a> 
              <a href="'.$siteAbsolutePath.'/DND/index.php?tool=userSubmittedLinks" class="list-group-item list-group-item-action">User Submitted Links</a> 
              <a href="'.$siteAbsolutePath.'/DND/index.php?tool=soundscapes" class="list-group-item list-group-item-action">DND Soundscapes</a> 
              <a href="'.$siteAbsolutePath.'/DND/index.php?tool=spells" class="list-group-item list-group-item-action">5E Spellbook</a> 
              <!-- Disabled Items -->
              <!--
              <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
               -->
            </div>



            ';
            break;
        }


        ?>

      </div>
    </div>


    <!-- Footer -->
    <?php include_once('../includes/footer.php');?>


  </div>     

    <!-- Separate jQuery, Popper, Bootstrap, and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script type="text/javascript">
/*
    $(document).ready( function () {

      $('.dataTable').DataTable();
    } );
    */
    </script>



    <script type="text/javascript">
    $(document).ready(function(){
      //init user submitted resources tables
var groupColumn = 0;
    var uSubtable = $('#uSubResDatatable').DataTable({
        "paging":   false,
        "columnDefs": [
            { "visible": false, "targets": groupColumn }
        ],
        "order": [[ groupColumn, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr style="background:#efefef!important;background-color:#efefef!important;color:#000000!important;" class="group"><td style="background:#efefef!important;background-color:#efefef!important;color:#000000!important;" colspan="3">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#uSubResDatatable tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
            uSubtable.order( [ groupColumn, 'desc' ] ).draw();
        }
        else {
            uSubtable.order( [ groupColumn, 'asc' ] ).draw();
        }
    } );
 //Custom Search / Filter
        $('#uSubResDatatable_customFilterSearch').keyup(function(){
          uSubtable.search(this.value, false, true, true).draw();
        });

      //init 1d100 tables
    var groupColumn = 0;
    var d100table = $('#d100Datatable').DataTable({
        "paging":   false,
        "columnDefs": [
            { "visible": false, "targets": groupColumn }
        ],
        "order": [[ groupColumn, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr style="background:#efefef!important;background-color:#efefef!important;color:#000000!important;" class="group"><td style="background:#efefef!important;background-color:#efefef!important;color:#000000!important;" colspan="2">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#d100Datatable tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === groupColumn && currentOrder[1] === 'asc' ) {
            d100table.order( [ groupColumn, 'desc' ] ).draw();
        }
        else {
            d100table.order( [ groupColumn, 'asc' ] ).draw();
        }
    } );

        //Custom Search / Filter
        $('#d100Datatable_customFilterSearch').keyup(function(){
          d100table.search(this.value, false, true, true).draw();
        });


    var soundscapetable = $('#soundscapesDatatable').DataTable( {
        "paging":   true,
        "ordering": false,
        "info":     true,
        "ajax": "dndTools/data/soundscapes.txt",
        "deferRender": true
    });

        //Custom Search / Filter
        $('#soundscapesDatatable_customFilterSearch').keyup(function(){
          soundscapetable.search(this.value, false, true, true).draw();
        });


    var spellsDatatable = $('#spellsDatatable').DataTable( {
      "dom": '<"top"i>rt<"bottom"flp><"clear">',
        "paging":   false,
        "ordering": true,
        "info":     true,
    });

    //Custom Search / Filter
    $('#spellsDatatable_customFilterSearch').keyup(function(){
      spellsDatatable.search(this.value, false, true, true).draw();
    });

    $( "#clearSpellSearch" ).click(function() {
      document.getElementById("spellsDatatable_customFilterSearch").value = '';
      spellsDatatable.search('', false, true, true).draw();
    });


//Custom Search / Filter
  $('.tagBadge').click(function(){
    //var searchValue=$(this).text();
    var result=$(this).text();
    //console.log('found:');
    //console.log(searchValue);

    //console.log('slice 1:');
    //var result = searchValue.slice(24);
    //console.log(result);

    //console.log('slice 2:');
    //var result = result.substring(0, result.length - 18);
    console.log(result);

    //console.log('a normal value');
    



    //get toggle state
    if($('#flexSwitchCheckAdditive').prop("checked") == true){
    //additive mode
    var oldSearchValue=document.getElementById("spellsDatatable_customFilterSearch").value;
    //var oldSearchValue=oldSearchValue.replaceAll("|", " ");
    var newSearchValue=oldSearchValue+' '+result;
    document.getElementById("spellsDatatable_customFilterSearch").value = newSearchValue;
    spellsDatatable.search(newSearchValue, false, true, true).draw();
    }else{
    //replace mode
    document.getElementById("spellsDatatable_customFilterSearch").value = result;
    spellsDatatable.search(result, false, true, true).draw();
    ////"search": {regex: true}
    //var oldSearchValue=document.getElementById("spellsDatatable_customFilterSearch").value;
    //var oldSearchValue=oldSearchValue.replaceAll(" ", "|");
    //var newSearchValue=oldSearchValue+'|'+result;
    //document.getElementById("spellsDatatable_customFilterSearch").value = newSearchValue;
    //spellsDatatable.search(newSearchValue, true, false ).draw();
    }
    
    
  });


/*

    var spellsDatatable = $('#spellsDatatable').DataTable( {
      "dom": '<"top"i>rt<"bottom"flp><"clear">',
        "paging":   false,
        "ordering": true,
        "info":     true,
    });


        //Custom Search / Filter
        $('#spellsDatatable_customFilterSearch').keyup(function(){

          if($('#flexSwitchCheckAdditive').prop("checked") == true){
          spellsDatatable.search(this.value, false, true, true).draw();
          }
          {
          spellsDatatable.search(this.value, true, true, true).draw();
          }


          //$('#example').DataTable({"iDisplayLength": 100, "search": {regex: true}}).column(1).search("backlog|Stretch|Solid|NIR", true, false ).draw()
        });



//Custom Search / Filter
        $('.tagBadge').click(function(){
          //var searchValue=$(this).text();
          var result=$(this).text();
          //console.log('found:');
          //console.log(searchValue);

          //console.log('slice 1:');
          //var result = searchValue.slice(24);
          //console.log(result);

          //console.log('slice 2:');
          //var result = result.substring(0, result.length - 18);
          console.log(result);

          //console.log('a normal value');
          



          //get toggle state
          if($('#flexSwitchCheckAdditive').prop("checked") == true){
          //additive mode
          var oldSearchValue=document.getElementById("spellsDatatable_customFilterSearch").value;
          var oldSearchValue=oldSearchValue.replaceAll("|", " ");
          var newSearchValue=oldSearchValue+' '+result;
          document.getElementById("spellsDatatable_customFilterSearch").value = newSearchValue;
          spellsDatatable.search(newSearchValue, false, true, true).draw();
          }else{
          //replace mode
          //document.getElementById("spellsDatatable_customFilterSearch").value = result;
          //spellsDatatable.search(result, false, true, true).draw();
          ////"search": {regex: true}
          var oldSearchValue=document.getElementById("spellsDatatable_customFilterSearch").value;
          var oldSearchValue=oldSearchValue.replaceAll(" ", "|");
          var newSearchValue=oldSearchValue+'|'+result;
          document.getElementById("spellsDatatable_customFilterSearch").value = newSearchValue;
          spellsDatatable.search(newSearchValue, true, false ).draw();
          }
          
          
        });

$("#flexSwitchCheckAdditive").change(function(){
    if($("#flexSwitchCheckAdditive").prop("checked") == true){       
       //additive mode
          var oldSearchValue=document.getElementById("spellsDatatable_customFilterSearch").value;
          var oldSearchValue=oldSearchValue.replaceAll("|", " ");
          var newSearchValue=oldSearchValue+' '+result;
          document.getElementById("spellsDatatable_customFilterSearch").value = newSearchValue;
          spellsDatatable.search(newSearchValue, false, true, true).draw();
          }
    else{
      //"search": {regex: true}
         var oldSearchValue=document.getElementById("spellsDatatable_customFilterSearch").value;
          var oldSearchValue=oldSearchValue.replaceAll(" ", "|");
          var newSearchValue=oldSearchValue+'|'+result;
          document.getElementById("spellsDatatable_customFilterSearch").value = newSearchValue;
          spellsDatatable.search(newSearchValue, true, false ).draw();
          }
});
*/
        
        $( ".fillViaAjaxParentChildTarget" ).click(function() {
          var scana=$(this).attr('data-attr-scana');
          console.log('Hit '+scana);
          //$(this).parent().parent().parent().children().find('span.targetForAjaxFill').text('background-color');
          //var targetContainer=$(this).parent().parent().parent().children().find('.targetForAjaxFill').load('./ajaxCalls/qrcp_getRandom.php?r='+scana);
          var targetContainer=$(this).parent().parent().parent().children().find('p.targetForAjaxFill');
          //
          targetContainer.load("./ajaxCalls/qrcp_getRandom.php?r="+scana, function( response, status, xhr ) {
            if ( status == "error" ) {
              var msg = "Sorry but there was an error: ";
              targetContainer.html( msg + xhr.status + " " + xhr.statusText );
            }
          });

          //$(this).parent().children().find('span.targetForAjaxFill').load('qrcp_getRandom.php?r='+scana);
          //alert( "Handler for .click() called." );
        });
        
        /*
        $(".category_toggles").click(function() {
          var $thisCategoryClicked=$(this).attr("data-attr-showhide");
          //show/hide andy .card where data-attr-card-category value = this.data-attr-showhide
          var constructedClassSelector1='.card.'+$thisCategoryClicked+'';
          //var constructedClassSelector2='.'+$thisCategoryClicked+'';
          //console.log(constructedClassSelector);
          //$('hr').hide();
          //$('h3').hide();
          $(constructedClassSelector1).toggle();

        });
        */




    });
    </script>
  </body>
  </html>






    