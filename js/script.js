/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

});
$(function() {
      $('#cse-search-box').submit(function(e) {
          
        var form = $(this);
       
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize()
        }).done(function(data) {
            $('#alert').html(data);
          console.log('success');
        }).fail(function() {
             $('#alert').html('fail');
          console.log('fail');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });
            
