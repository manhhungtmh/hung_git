          <br />

        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <p style="font-size: 13px;margin: 0;">Hệ thống được phát triển bởi <i style="color: red" class="fa fa-heart"></i> <a href="https://www.facebook.com/tophatrienvachuyengiaocongnghe/"><b class="tpt">Tổ phát triển và Chuyển giao công nghệ - Khoa CNTT</b></a></p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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
<!-- jQuery -->
<script type="text/javascript">
	$('.dashboard_graph').remove();
</script>
<!-- Bootstrap -->
 <script src="{$url}public/bootstrap/js/bootstrap.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{$url}/vendors/bootstrap-progressbar.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="{$url}vendors/custom.min.js"></script>
 <!-- iCheck -->
<script src="{$url}/vendors/icheck.min.js"></script>
</body>
</html>

