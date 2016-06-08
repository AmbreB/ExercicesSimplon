'use strict';
$(function(){

	var nbRowsCols = prompt('Combien de lignes et colonnes ?') || 10;

	// Définition d'un objet Ant avec deux paramètres : posX et posY

	var Ant = function(posX, posY) {
	// Constructeur
			// Déclare des attributs à l'objet courant
		this.posX = posX;
		this.posY = posY;
			// Déclare la fonction getImg à l'objet courant
		this.getImg = function(){
			var img = document.createElement('img');
			img.src = '/img/antsbla.png';
			return img;
		}
		// return this
	}
	// Création d'instances de l'objet Ant
	// Dans le scope global

	var tableSize = nbRowsCols - 1,
		ant1 = new Ant(0,0),
		ant2 = new Ant(0,tableSize),
		ant3 = new Ant(tableSize,0),
		ant4 = new Ant(tableSize,tableSize);

	var app = {
		drawTable: function() {
			if (this.hasTable()) {
				this.removeTable();
			}
			this.insertTable();
			// prochain chapitre : setTimeout(this.drawTable, 1000);
		},
		hasTable: function() {
			var result = $('.container').has('table');
			return result.length !== 0;
		},
		removeTable: function(){
			$('.container table').remove();
		},
		insertTable: function() {
			var myTable = document.createElement('table');

			for (var i = 0; i < nbRowsCols; i++) {
				var row = $(document.createElement('tr'));
				$(myTable).append(row);
				for (var j = 0; j < nbRowsCols; j++) {
					var tile = document.createElement('td');
					var isAntThere = this.isAnyAntThere(i,j)
					if (isAntThere) {
						var img = ant1.getImg();
						$(tile).append(img);
					}
					row.append(tile);
				}
			}
			$('.container').append(myTable);
		},

		 //Cette function retourne true si ant est à la position [posX, posY]

		isAntThere: function(posX, posY, ant) {
			return (posX==ant.posX && posY==ant.posY);
		},

		isAnyAntThere: function(i, j) {
			return this.isAntThere(i, j, ant1) || this.isAntThere(i, j, ant2) || this.isAntThere(i, j, ant3) || this.isAntThere(i, j, ant4);
		}

	};
	app.drawTable();
});