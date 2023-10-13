$(document).ready(() => {
    $("#formConn").submit((e) => {
        if($("#emailUtilFormConn").hasAttribute("obsolete")) {
            e.preventDefault();
            $("#emailUtilFormConn").html("")
        }
        if($("#passwordUtilFormConn").hasAttribute("obsolete")) {
            $("#passwordUtilFormConn").html("")
        }
    });
    $('#headingOne h5 button').click( () => {
        if ($('#collapseOne').is(':visible')) {
            $('#collapseOne').hide();
        } else {
            $('#collapseOne').show();
        }
    });
    $('#headingTwo h5 button').click( () => {
        if ($('#collapseTwo').is(':visible')) {
            $('#collapseTwo').hide();
        } else {
            $('#collapseTwo').show();
        }
    });
    $('#headingThree h5 button').click( () => {
        if ($('#collapseThree').is(':visible')) {
            $('#collapseThree').hide();
        } else {
            $('#collapseThree').show();
        }
    });
    $('#headingFour h5 button').click( () => {
        if ($('#collapseFour').is(':visible')) {
            $('#collapseFour').hide();
        } else {
            $('#collapseFour').show();
        }
    });
   	$(document).on('click','.plus', () => {
		$('#qty').val(parseInt($('#qty').val()) + 1 );
        if ($('#qty').val() == 2) {
            $(".plus").prop('disabled', true);
        }
    });
    $(document).on('click','.minus', () => {
        $('#qty').val(parseInt($('#qty').val()) - 1 );
    		if ($('#qty').val() == 0) {
				$('#qty').val(1);
		}
	});

    $("#qty").on("input", () => {
        for (i = 0; i < $("#qty").val(); i++) {
            $("divAjoutContact").html(
                "<b>test</b>"
            );
        }
    });
});

function ajouterContact(id) {
    var html = "";
    switch (id) {
        case "ajouterContact-1":
            html += "<div id=\"contact-2\" class=\"contact\">"
            html += "    <div class=\"title\">"
            html += "       Contact secondaire"
            html += "       <svg onclick=\"supprimerContact(this.id)\" id=\"supprimerContact-2\" class=\"supprimerContact\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z\"></path></svg>"
            html += "    <div>"
            html += "    <div id=\"nom-prenom\" class=\"input nom-prenom\">"
            html += "        <div id=\"div-nom-2\" class=\"input\">"
            html += "            <span>Nom :</span>"
            html += "            <input type=\"text\" id=\"nom-2\">"
            html += "        </div>"
            html += "        <div id=\"div-prenom-2\" class=\"input\">"
            html += "            <span>Prenom :</span>"
            html += "            <input type=\"text\" id=\"prenom-2\">"
            html += "        </div>"
            html += "    </div>"
            html += "    <div id=\"poste-2\" class=\"input\">"
            html += "        <span>Poste :</span>"
            html += "        <input type=\"text\" class=\"poste-2\">"
            html += "    </div>"
            html += "    <div id=\"email-2\" class=\"input\">"
            html += "        <span>Email :</span>"
            html += "        <input type=\"text\" class=\"email-2\">"
            html += "    </div>"
            html += "    <div id=\"tel-fixe-2\" class=\"input tel-fixe\">"
            html += "        <div id=\"div-tel-2\" class=\"input\">"
            html += "            <span>Téléphone :</span>"
            html += "            <input type=\"text\" id=\"tel-2\">"
            html += "        </div>"
            html += "        <div id=\"div-fixe-2\" class=\"input\">"
            html += "            <span>Fixe :</span>"
            html += "            <input type=\"text\" id=\"fixe-2\">"
            html += "        </div>"
            html += "    </div>"
            html += "    <div class=\"ajouterContact\" id=\"ajouterContact-2\" onclick=\"ajouterContact(this.id)\">"
            html += "        + Ajouter un contact supplémentaire"
            html += "    </div>"
            html += "</div>"

            document.getElementById(id).style.display = 'none'
            document.getElementById('contact-1').innerHTML += html
            break;
        case "ajouterContact-2":
            html += "<div id=\"contact-3\" class=\"contact\">"
            html += "    <div class=\"title\">"
            html += "       Contact de secours"
            html += "       <svg onclick=\"supprimerContact(this.id)\" id=\"supprimerContact-3\" class=\"supprimerContact\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z\"></path></svg>"
            html += "    <div>"
            html += "    <div id=\"nom-prenom\" class=\"input nom-prenom\">"
            html += "        <div id=\"div-nom-3\" class=\"input\">"
            html += "            <span>Nom :</span>"
            html += "            <input type=\"text\" id=\"nom-3\">"
            html += "        </div>"
            html += "        <div id=\"div-prenom-3\" class=\"input\">"
            html += "            <span>Prenom :</span>"
            html += "            <input type=\"text\" id=\"prenom-3\">"
            html += "        </div>"
            html += "    </div>"
            html += "    <div id=\"poste-3\" class=\"input\">"
            html += "        <span>Poste :</span>"
            html += "        <input type=\"text\" class=\"poste-3\">"
            html += "    </div>"
            html += "    <div id=\"email-3\" class=\"input\">"
            html += "        <span>Email :</span>"
            html += "        <input type=\"text\" class=\"email-3\">"
            html += "    </div>"
            html += "    <div id=\"tel-fixe-3\" class=\"input tel-fixe\">"
            html += "        <div id=\"div-tel-3\" class=\"input\">"
            html += "            <span>Téléphone :</span>"
            html += "            <input type=\"text\" id=\"tel-3\">"
            html += "        </div>"
            html += "        <div id=\"div-fixe-3\" class=\"input\">"
            html += "            <span>Fixe :</span>"
            html += "            <input type=\"text\" id=\"fixe-3\">"
            html += "        </div>"
            html += "    </div>"
            html += "</div>"

            document.getElementById(id).style.display = 'none'
            document.getElementById("supprimerContact-2").style.display = 'none'
            document.getElementById('contact-2').innerHTML += html
            break;
    }
}

function supprimerContact(id) {
    switch (id) {
        case "supprimerContact-2":
            document.getElementById('contact-2').remove()
            document.getElementById('ajouterContact-1').style.display = 'block'
            break;
        case "supprimerContact-3":
            document.getElementById('contact-3').remove()
            document.getElementById("supprimerContact-2").style.display = 'inline-block'
            document.getElementById('ajouterContact-2').style.display = 'block'
        break;
    }
}