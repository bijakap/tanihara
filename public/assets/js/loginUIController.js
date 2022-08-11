$("#phonenumber").click(()=>{
  $("#container-phonenumber").removeClass("hidden").addClass("block")

  $("#container-login").removeClass("block").addClass("hidden")

  $("#back").removeClass("hidden").addClass("flex")

  $("#menu-login").removeClass("block").addClass("hidden")

  $("#forget-password").removeClass("block").addClass("hidden")

})

$("#back-button").click(() => {
  $("#container-phonenumber").removeClass("block").addClass("hidden")

  $("#container-login").removeClass("hidden").addClass("block")

  $("#back").removeClass("flex").addClass("hidden")

  $("#menu-login").removeClass("hidden").addClass("block")

  $("#forget-password").removeClass("hidden").addClass("block")
})