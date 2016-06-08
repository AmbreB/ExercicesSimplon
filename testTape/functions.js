rover = {

	params : {
		posX:null,
		posY:null,
		direction:null,
	},
	getStartingPoint : function(posX, posY, direction) {
		this.params.posX = posX;
		this.params.posY = posY;
		this.params.direction = direction;
	},
	turn : function() {

	},
}

module.exports = rover;