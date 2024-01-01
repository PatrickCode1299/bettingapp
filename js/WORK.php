data={
CSRF: getCSRFTokenValue(),
};
$.ajax({
  url:"{{ route('answer_trivia')}}",
  /**beforeSend: function (){
        $("#popimage").show();
      },
      complete: function(){
        $("#popimage").hide();
      }, **/
  type:'POST',
  data:data,
  success:function(response){
   alert(response);
   console.log(response);
  
  }
});

return false;
}); 

}
