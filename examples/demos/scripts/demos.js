window.addEvent('domready', function(){
	var divs = $$(['php', 'html', 'css']);
	divs.each(function(div){
		var link = $(div.id + 'code');
		div.setStyle('display', 'none');
		link.addEvent('click', function(e){
			e = new Event(e);
			divs.each(function(other){
				if (other != div) other.setStyle('display', 'none');
			});
			div.setStyle('display', (div.getStyle('display') == 'block') ? 'none' : 'block');
			e.stop();
		});
	});
	$('exampleonly').addEvent('click', function( e ) {
		e = new Event(e);
		divs.each(function(other){
			other.setStyle('display', 'none');
		});
		e.stop();
	});

	$$('form').each(function( form ) {
		var t = window.location.href.replace('demos/', '' );
		if( t.indexOf('?')!=-1 ) t = t.substr( 0, t.indexOf('?') );
		t = t.replace('.php', '/' )+form.getProperty('action' );
		form.setProperty('action', t );
	});

	$('billbook').addEvent("click", function() {
		var f = document.forms["fullWebPayment"];
		if (!f.recurringBillingLeft.value ) { alert("Billing Left Missing"); return; }
		if( !f.recurringFirstAmount.value ) {
			f.recurringAmount.value = f.recurringFirstAmount.value = Math.round(f.paymentAmount.value / f.recurringBillingLeft.value);
		} else {
			f.recurringAmount.value = Math.round( (f.paymentAmount.value - f.recurringFirstAmount.value) / (f.recurringBillingLeft.value - 1) );
		}
	});
});

//Générateur de clef pour créer des wallet facilement
function passGenerator(){
	if(document.getElementById('createWalett') || document.getElementById('createWalettW')){
		var cars="az0erty2ui3op4qs_5df6gh7jk8lm9wxcvbn-";
		var long=cars.length;
		wpas="";
		//Taille du mot de passe ?
		taille=6;

		for(i=0;i<taille;i++){
			// Tirage aléatoire d'une valeur entre 1 et wlong
			wpos=Math.round(Math.random()*long);
			// On cumule le caractère dans le mot de passe
			   wpas+=cars.substring(wpos,wpos+1);
			// On continue avec le caractère suivant à générer
		}

		document.getElementById('walletId').value = "Wallet_"+wpas ;
	}
}

/*
 * Prerempli le contract number dans les formulaire html
 * par le contract number spécifié dans le fichier
 * option.php
*/
function fillContractNumber(contractNumberConfig){
	if(document.getElementById('doAuthorization') || document.getElementById('fullWebPayment')){
		document.getElementById('paymentContractNumber').value = contractNumberConfig ;
	}
}




