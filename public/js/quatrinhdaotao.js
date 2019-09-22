$(document)/$(document).ready(function() {
    var namdh = $('#totnghiepdh').html();
    var namts = $('#hidden').html();
    
    $(document).on('click','button[name="themnamts"]', function(){
        $('#hidden select').addClass('js-example-basic-multiple1');
        var namts1 = $('#hidden').html();
        stt = $('.totnghiepts fieldset').length + 1;
        $('.totnghiepts fieldset legend').attr('data-info',stt);
        $('.totnghiepts').append(namts1);
        $(".totnghiepts fieldset:last-child legend").html('Năm tốt nghiệp Thạc sỹ  '+stt + '&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-xs btn-warning xoathacsi" data-key="1"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa thạc sĩ này</button>');
        $(".totnghiepts fieldset:last-child").find('.title-qtdt-ntnts').text('Năm tốt nghiệp Thạc sỹ  '+stt);
        $(".totnghiepts fieldset:last-child").find('.namtnts').text('Năm tốt nghiệp Thạc sỹ  '+stt);
        // 
        $('#hidden select').removeClass('js-example-basic-multiple1');
        thuvien1();
    }); 
    $(document).on('click','button[name="themnamdh"]', function(){
        $('#totnghiepdh select').addClass('js-example-basic-multiple1');
        stt = $('.totnghiepdh fieldset').length + 1;
        $('.totnghiepdh fieldset legend').attr('data-info',stt);
        $(this).attr('data-info', stt);
        stt = $(this).attr('data-info');
        $('.totnghiepdh').append(namdh);
        $(".totnghiepdh fieldset:last-child legend").html('Năm tốt nghiệp Đại học  ' + stt + '&nbsp; &nbsp;&nbsp;<button type="button" class="btn btn-xs btn-warning xoadaihoc" data-key="1"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa đại học này</button>');
        $(".totnghiepdh fieldset:last-child").find('.title-qtdt-namtn').text('Năm tốt nghiệp Đại học  '+stt);
        $(".totnghiepdh fieldset:last-child").find('.op-namtn').text('Năm tốt nghiệp Đại học  '+stt);
        $('#totnghiepdh select').removeClass('js-example-basic-multiple1');
        thuvien1();
    }); 
    function thuvien1(){
        $('.js-example-basic-multiple1').select2();
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
      })
      $('.js-example-basic-single1').select2();
    }
    function thuvien(){
        $('.js-example-basic-multiple').select2();
        $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
      })
      $('.js-example-basic-single').select2();
    }
    $(document).on('click', '.xoathacsi', function(){
        $(this).parent().parent().remove();
    });
    $(document).on('click', '.xoadaihoc', function(){
        $(this).parent().parent().remove();
    });
});
