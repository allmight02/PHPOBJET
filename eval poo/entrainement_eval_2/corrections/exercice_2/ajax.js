$(document).ready(function(){
	// La suite sera éxécutée après le chargement de la page
	$("#submit").click(function(event){
		//Au clique sur le bouton submit tu me lance la function il va interagir sur l'event
		// on cible un evenement JS quel qu'il soit
		event.preventDefault(); // Annule le comportement initial du submit

		affichageProduit(); // On lance la fonction que l'on souhaite éxécuter
	});
	
	function affichageProduit(){//puis on créer la function tout en restant dans le ready
		
		$.ajax({
			url : 'ajax.php',
			dataType: 'json',
			success : function(data){//on va recupérer l'argument et elle va afficher les resultat
				console.log(data);
				$("#resultat").html(data.resultat);
			}
		});
		
		//$.post('ajax.php', '', function(data){}, 'json');
	}
	
});

