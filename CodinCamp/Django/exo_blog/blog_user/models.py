from __future__ import unicode_literals

from django.db import models

class Stagiaire(models.Model):
	nom = models.CharField(max_length=60)
	prenom = models.CharField(max_length=60)

	def __unicode__(self):
		return "%s %s" % (self.nom, self.prenom)
	
