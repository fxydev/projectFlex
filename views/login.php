<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">

    <div class="container">
      <label for="uname"><b>Usuario</b></label>
      <input type="text" placeholder="Introduce usuario" name="uname" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Introduce contraseña" name="psw" required>
        
      <button type="submit">Iniciar Sesión</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>