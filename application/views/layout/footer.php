{if !empty($message)}
<script type="text/javascript">
	  setTimeout(function() {
	    toastr.options = {
	      closeButton: true,
	      progressBar: true,
	      showMethod: 'slideDown',
	      timeOut: 5000
	    };
	    toastr.{$message.type}("{$message.title}","{$message.message}");
	  }, 200);
</script>
{/if}   
<script type="text/javascript">
	$('[data-toggle="tooltip"]').tooltip(); 
    $('.js-example-basic-multiple').select2();
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
      })
    $('.js-example-basic-single').select2();
    $(function() {
        $('#table_id').DataTable();
        // $('#tableleft').DataTable();
        // $('#tableright').DataTable();
    })
    checkox =  $('input[type="checkbox"]');
      checkox.change(function(event) {
      	if($(this).is(':checked')){
      		$(this).attr("checked", true);
      	}else{
      		$(this).attr("checked", false);
      	}
      });
</script>

   </body>
</html>