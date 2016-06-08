var test = require('tape');
var rover = require('../functions.js');

test('Vérifier que la position est définie', function(t){
	rover.getStartingPoint(1,1,"E");

	t.equal(rover.params.posX,1);
	t.equal(rover.params.posY,1);
	t.equal(rover.params.direction,'E');
	t.end();
});

// test('Verifier que 14 plus 6 egal 20', function(t){
// 		t.plan(1);
//   	var ajout = somme(14, 6);
//   	t.equal(ajout, 20); 
// });
