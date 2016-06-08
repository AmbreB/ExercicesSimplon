var request = require("request");
var cheerio = require("cheerio");
var fs = require('fs');

/*Les fonctions */
var checkfile = function(url) {
        console.log(url)
        dumPage(url, cb)

        // try {
        //     fs.accessSync(path, fs.F_OK); /*code executé sequentiellement */
        //     cb(fs.readFileSync(path, 'UTF8'))
        //     console.log("ce fichier existe");
        // } catch (e) { /*on attrape l exception si il y en a une*/
        //     console.log("ce fichier n'existe pas");
        //     dumPage(url, cb);
        // }

    }
module.exports = function(){

function dumPage(url, cb) {

    request(url, function(error, response, body) {
        if (!error) {
            cb(body);
            console.log("fichier créé");
            fs.writeFileSync(path, body);
        } else {
            console.log("Erreur :" + error);
        }
    })
}

/*

function traitement(body) {

    $ = cheerio.load(body);
    var tableau = $("#horaires table")[0];
    var tablength = $($(tableau).find("tr")).length;
    var arret = lirelignearrets(tableau);
    console.log(arret);
    recurseArrets();

}

function lirelignearrets(tableau) {

    var tr = $(tableau).find("tr")[1];
    var $$ = cheerio.load(tr);
    var horaires = lirelignehoraires(tr);
    var nom = $($(tr).find("th")[0]).text();

    return [nom, horaires];

}

function lirelignehoraires(tr) { //return ["heure","heure"]

    var $$ = cheerio.load(tr);
    var horairesTD = $$('td');
    var len = horairesTD.get().length;
    var tabhoraires = [];

    for (var j = 1; j < len; j++) {

        var td = horairesTD.get(j);
        tabhoraires.push($(td).html());

    }

    return tabhoraires;

}

function recurseArrets(body) {

    for (var i = 1; i < td.length; i++) {
        var current = {};
        var ret = lirelignearrets();
        current.name = ret[0];
        current.horaires = ret[1];
        data["l11"].arrets.push(current)
    }
}
*/
    this.checkfile = checkfile
}