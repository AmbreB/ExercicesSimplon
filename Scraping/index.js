var request = require("request");
var cheerio = require("cheerio");
var crypto = require('crypto'); /*librairie*/
var fs = require('fs');


/*Les fonctions */

function createsha1(url) { /* on lui donne un nom qu'il puisse utiliser - sa clef diffère selon l'url*/
    var shasum = crypto.createHash("sha1"); /* creation d'une clef*/
    shasum.update(url);
    return shasum.digest('hex');
}

function checkFileExists(path) {
    try {
        fs.accessSync(path, fs.F_OK); /*code executé sequentiellement */
        console.log("Ce fichier existe dans le dossier ./cache");
        return true;
    } catch (e) { /*on attrape l exception si il y en a une*/
        console.log("Ce fichier n'existe pas ");
        return false
    }
}
    //dumPage(url, cb);
    //cb(fs.readFileSync(path, 'UTF8'))
function saveToCache(url, path, successCallback) {
    //fonction asynchrone
    request(url, function(error, response, body) {
        if (!error) {
            fs.writeFileSync(path, body);
            console.log("fichier créé");
            successCallback(path);

        } else {
            console.log("Erreur :" + error);
        }
    })
}
function printData(path) { 
    var donnees = {
        data: {
            "l11-bassocambo-empalot": {
                "name": "Ligne 11 Bassso",
                arrets: []
            }
        }
    } 
}
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

function recurseArrets(td) {

    for (var i = 1; i < td.length; i++) {
        var current = {};
        var ret = lirelignearrets();
        current.name = ret[0];
        current.horaires = ret[1];
        data["l11"].arrets.push(current)
    }
}

function main (url) {

    /*Initialisation des variables */

    var sha1 = createsha1(url);
    var path = "cache/" + sha1;
    /*Appel premiere fonction */
    if (checkFileExists(path) == false) {
        saveToCache(url, path, printData);
    } else {
        printData(path);
    }
}
var $;
var url = "https://www.tisseo.fr/sites/default/files/ligne11.html";

main(url);