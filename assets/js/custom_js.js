  $("#optn_xls").click(function(){
    $("#format").val(".xls");
    $("#format_display").val("Excel");
    // alert($("#format_display").val());
  });
  $("#optn_csv").click(function(){
    $("#format").val(".csv");
    $("#format_display").val("CSV");
  });
  $("#optn_sql").click(function(){
    $("#format").val(".sql");
    $("#format_display").val("SQL");
  });