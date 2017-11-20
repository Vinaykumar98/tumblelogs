$(document).ready(function(){
  $('.comment').keyup(function(event) {

    if(event.keyCode==13)
    {
      var post_id=$(this).attr('post_id');
      var comment=$(this).val();

      $.post('comment.php',{post_id : post_id, comment : comment });

        $('.comment').val('');
          $(this).parent().children('.comments').append("<div class='awe'> <b>Djinn :</b>"+comment+"</div>");
  }
  });
});
