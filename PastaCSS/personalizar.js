/* $(document).ready(function(){
alert("oi")
	}); */

	function modalRemover($id, $elemento){
		const myModal = new bootstrap.Modal('#modalExcluir');
		myModal.show();
		document.getElementById($elemento).value = $id;
		//window.location.href = "./registro.php";
		}
		

		function maskCPF(i) {
			var v = i.value;
			if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
				i.value = v.substring(0, v.length - 1);
				return;
			}
	
			i.setAttribute("maxlength", "14");
			if (v.length == 3 || v.length == 7) i.value += ".";
			if (v.length == 11) i.value += "-";
		}
	
		function maskRG(i) {
			var v = i.value;
			if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
				i.value = v.substring(0, v.length - 1);
				return;
			}
	
			i.setAttribute("maxlength", "12");
			if (v.length == 2 || v.length == 6) i.value += ".";
			if (v.length == 10) i.value += "-";
		}
	
		document.getElementById("foto").addEventListener("change", readImage, false);
		
		function readImage() {
			if (this.files && this.files[0]) {
				var file = new FileReader();
				file.onload = function(e) {
					document.getElementById("preview").src = e.target.result;
				};
				file.readAsDataURL(this.files[0]);
			}
		}
	