$('form').submit(function() {
     $('input, select, textarea').each(function() {
       var value = $(this).val(),
           name = $(this).attr('name');
       localStorage[name] = value;
         
         console.log('stored key: '+name+' stored value: '+value);
    });   
});