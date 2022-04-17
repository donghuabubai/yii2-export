$(function(){
    $('#download').on('click',function (){
        var display = $('.layui-form-item').css('display');
        if(display == 'none'){
            $('.layui-form-item').css('display','inline');
            $(this).parent().parent().find('div').addClass('layui-form-selected layui-form-selectup');
        }else{
            console.log(1);
            $('.layui-form-item').css('display','none');
            $(this).parent().parent().find('div').removeClass('layui-form-selected layui-form-selectup');
        }
    });
    $('.layui-filter-panel li').on('click',function (){
        if($(this).find('input:checkbox').is(':checked')){
            $(this).find('input:checkbox').removeAttr('checked');
            $(this).find('div').removeClass('layui-form-checked');
        }else{
            $(this).find('input:checkbox').attr('checked','');
            $(this).find('div').addClass('layui-form-checked');
        }
    });

    //导出
    $('#export').on('click',function (){
        var titles = [];
        var fields = [];
        var ids = [];
        $('.layui-filter-panel input[type="checkbox"]:checked').each(function(){
            fields.push($(this).attr('name'));
            titles.push($(this).attr('title'));
        })

        $.each($('input[name="selection[]"]:checked'), function (k, v) {
            ids.push(v.value);
        })

        var url = $('#url').val();

        window.open(url + '&fields=' + fields.join(',') + '&titles=' + titles.join(',') + '&ids=' + ids.join(','))
    });
});