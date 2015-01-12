/* @author  -   Channaveer Hakari
 * @email   -   channaveer888@gmail.com
 * @Version -	1.0
 * @Date    -   10/11/2014
 */

$('#convert').on('click',function(){
    $('.loading').show();
    var drive_url   =   $.trim($('#drive_url').val());
    $('#converted_url').text('');
    if(drive_url.length != ''){
        $.ajax({
            url     :   'convert.php',
            data    :   {drive_url:drive_url},
            dataType:   'json',
            type    :   'POST',
            success :   function(retObj){
                if(retObj.converted_url == 'error'){
                    $('.loading').hide();
                    $('#converted_url').append('Invalid URL or Format');
                }else{
                    $.each(retObj, function(key,value){
                        $.each(value, function(k,v){
                            if(k != ''){
                                $('#converted_url').append(k+"\n"+v+"\n\n");
                            }else{
                                $('#converted_url').append(v+"\n");
                            }
                        })
                    });
					$('.loading').hide();
                }
            }
        });
    }else{
        alert('Add the URL');
        $('.loading').hide();
    }
});
